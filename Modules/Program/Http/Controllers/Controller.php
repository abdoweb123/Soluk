<?php

namespace Modules\Program\Http\Controllers;

use App\Functions\Upload;
use App\Http\Controllers\BasicController;
use Illuminate\Http\Request;
use Modules\Program\Entities\Model;
use Modules\Specialist\Entities\Model as Specialist;

class Controller extends BasicController
{
    public function index(Request $request)
    {
        $Models = Model::get();

        return view('program::index', compact('Models'));
    }

    public function create()
    {
        $specialists = Specialist::query()->get();
        return view('program::create',compact('specialists'));
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'title_ar' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'desc_ar' => 'required|string',
            'desc_en' => 'required|string',
            'specialist_id' => 'required|exists:specialists,id',
        ]);

        $Model = Model::create($request->all());
        if ($request->hasFile('file')) {
            $Model->file = Upload::UploadFile($request->file, 'Programs');
            $Model->save();
        }
        alert()->success(__('trans.addedSuccessfully'));

        return redirect()->back();
    }

    public function show($id)
    {
        $Model = Model::where('id', $id)->firstorfail();

        return view('program::show', compact('Model'));
    }

    public function edit($id)
    {
        $Model = Model::where('id', $id)->firstorfail();
        $specialists = Specialist::query()->get();

        return view('program::edit', compact('Model','specialists'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'title_ar' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'desc_ar' => 'required|string',
            'desc_en' => 'required|string',
            'specialist_id' => 'required|exists:specialists,id',
        ]);

        $Model = Model::where('id', $id)->firstorfail();
        $Model->update($request->all());
        if ($request->hasFile('file')) {
            $Model->file = Upload::UploadFile($request->file, 'Programs');
            $Model->save();
        }
        alert()->success(__('trans.updatedSuccessfully'));

        return redirect()->back();
    }

    public function destroy($id)
    {
        $Model = Model::where('id', $id)->delete();
    }
}
