<?php

namespace Modules\Center\Http\Controllers;

use App\Http\Controllers\BasicController;
use Illuminate\Http\Request;
use Modules\Center\Entities\Model;

class Controller extends BasicController
{
    public function index(Request $request)
    {
        $Models = Model::get();

        return view('center::index', compact('Models'));
    }

    public function create()
    {
        return view('center::create');
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'title_ar' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
        ]);

        $Model = Model::create($request->all());
        alert()->success(__('trans.addedSuccessfully'));

        return redirect()->back();
    }

    public function show($id)
    {
        $Model = Model::where('id', $id)->firstorfail();

        return view('center::show', compact('Model'));
    }

    public function edit($id)
    {
        $Model = Model::where('id', $id)->firstorfail();

        return view('center::edit', compact('Model'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'title_ar' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
        ]);

        $Model = Model::where('id', $id)->firstorfail();
        $Model->update($request->all());
        alert()->success(__('trans.updatedSuccessfully'));

        return redirect()->back();
    }

    public function destroy($id)
    {
        $Model = Model::where('id', $id)->delete();
    }

} //end of class
