<?php

namespace Modules\SliderHome\Http\Controllers;

use App\Functions\Upload;
use App\Http\Controllers\BasicController;
use Illuminate\Http\Request;
use Modules\SliderHome\Entities\Model;

class Controller extends BasicController
{
    public function index(Request $request)
    {
        $Models = Model::get();

        return view('sliderHome::index', compact('Models'));
    }

    public function create()
    {
        return view('sliderHome::create');
    }

    public function store(Request $request)
    {
        $Model = Model::create($request->all());
        if ($request->hasFile('file')) {
            $Model->file = Upload::UploadFile($request->file, 'SliderHome');
            $Model->save();
        }
        alert()->success(__('trans.addedSuccessfully'));

        return redirect()->back();
    }

    public function show($id)
    {
        $Model = Model::where('id', $id)->firstorfail();

        return view('sliderHome::show', compact('Model'));
    }

    public function edit($id)
    {
        $Model = Model::where('id', $id)->firstorfail();

        return view('sliderHome::edit', compact('Model'));
    }

    public function update(Request $request, $id)
    {
        $Model = Model::where('id', $id)->firstorfail();
        $Model->update($request->all());
        if ($request->hasFile('file')) {
            $Model->file = Upload::UploadFile($request->file, 'SliderHome');
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
