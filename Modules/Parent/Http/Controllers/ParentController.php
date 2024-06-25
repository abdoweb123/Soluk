<?php

namespace Modules\Parent\Http\Controllers;

use App\Functions\ResponseHelper;
use App\Http\Controllers\BasicController;
use App\Http\Resources\ChildProgramResource;
use App\Http\Resources\ChildResource;
use App\Models\Children;
use App\Models\ChildrenProgram;
use Illuminate\Http\Request;
use Modules\Program\Entities\Model as Program;

class ParentController extends BasicController
{

    /*** get children of parent ***/
    public function getChildren()
    {
        $auth = $this->CheckAuth();
        $children = Children::query()
            ->where('parent_id',$auth->id)
            ->get();

        $children = ChildResource::collection($children);

        ResponseHelper::make($children,__('trans.Data_fetched_successfully'));
    }


    /*** get children of parent ***/
    public function getChildrenData()
    {
        $auth = $this->CheckAuth();

        $children = Children::query()
            ->where('parent_id',$auth->id)
            ->with(['programs' => function ($query) {
                $query->select('programs.id', 'programs.title_'.lang().' as title')
                    ->groupBy('programs.id'); ; // Selecting 'id' and 'title' from 'programs' table
            }])
            ->get();

        $children = ChildResource::collection($children);
        ResponseHelper::make($children,__('trans.Data_fetched_successfully'));
    }


    /*** get programs of child ***/
    public function addProgramToChild(Request $request)
    {
        $this->CheckAuth();

        $request->validate([
            'child_id'=>'required|exists:children,id',
            'program_id'=>'required|exists:programs,id',
        ]);

        $child_id = $request->child_id;
        $program_id = $request->program_id;

        $childProgram = ChildrenProgram::query()->updateOrCreate([
            'child_id'=>$request->child_id,
            'program_id'=>$request->program_id,
        ]);


         // get programs of child
        $childPrograms = Program::whereHas('childPrograms', function ($q) use ($child_id,$program_id) {
            $q->where('child_id', $child_id)->where('program_id',$program_id);
        })->with(['childPrograms' => function ($q) use ($child_id,$program_id) {
            $q->where('child_id', $child_id)->where('program_id',$program_id);
        }])->with('topics')->first();


        $childPrograms = ChildProgramResource::make($childPrograms);

        ResponseHelper::make($childPrograms,__('trans.Data_fetched_successfully'));
    }


} //end of class
