<?php

namespace App\Http\Controllers;

use App\Http\Requests\Dashboard\ChildrenProgramRequest;
use App\Models\Children;
use App\Models\ChildrenProgram;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Modules\Program\Entities\Model as Program;

class ChildrenProgramController extends BasicController
{
    public function index(Request $request)
    {
        $Models = ChildrenProgram::groupBy('program_id', 'child_id')->get();

        return view('Admin.ChildrenProgram.index', compact('Models'));
    }

    public function create()
    {
        $children = Children::query()->select('id','name')->get();
        $programs = Program::query()->select('id','title_'.lang().' as title')->get();
        $topics = Topic::query()->select('id','title_'.lang().' as title')->get();

        return view('Admin.ChildrenProgram.create', compact('children','programs','topics'));
    }


    public function store(ChildrenProgramRequest $request)
    {
        foreach ($request->topic_id as $topic_id) {
            ChildrenProgram::query()->create([
                'child_id'=>$request->child_id,
                'program_id'=>$request->program_id,
                'topic_id'=>$topic_id,
            ]);
        }

        // Redirect back with a success message
        alert()->success(__('trans.addedSuccessfully'));
        return redirect()->back();
    }


    public function show($id)
    {
        $Model = Model::where('id', $id)->firstorfail();

        return view('parent::show', compact('Model'));
    }

    public function edit($child_id, $program_id)
    {
        $Model = ChildrenProgram::where('child_id', $child_id)->where('program_id', $program_id)->firstorfail();
        $children = Children::query()->select('id','name')->get();
        $programs = Program::query()->select('id','title_'.lang().' as title')->get();
        $selectedTopicIds = ChildrenProgram::where('child_id', $child_id)->where('program_id', $program_id)->pluck('topic_id')->toArray();
        $topics = Topic::query()->select('id','title_'.lang().' as title')->get();

        return view('Admin.ChildrenProgram.edit', compact('children','programs','Model','topics','selectedTopicIds'));
    }

    public function update(ChildrenProgramRequest $request,$child_id, $program_id)
    {
        $Model = ChildrenProgram::where('child_id', $child_id)->where('program_id', $program_id)->delete();

        foreach ($request->topic_id as $topic_id) {
            ChildrenProgram::query()->create([
                'child_id'=>$request->child_id,
                'program_id'=>$request->program_id,
                'topic_id'=>$topic_id,
            ]);
        }

        // Redirect back with a success message
        alert()->success(__('trans.updatedSuccessfully'));
        return redirect()->back();
    }

    public function destroy($id)
    {
        $Model = Model::where('id', $id)->delete();
    }

} //end of class
