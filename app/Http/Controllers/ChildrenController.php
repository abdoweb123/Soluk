<?php

namespace App\Http\Controllers;


use App\Models\Children;
use Illuminate\Http\Request;

class ChildrenController extends BasicController
{
    public function index(Request $request)
    {
        $Models = Children::get();

        return view('Admin.Children.index', compact('Models'));
    }

    public function create()
    {
        $cities = City::all();
        return view('parent::create', compact('cities'));
    }

    public function store(StoreRequest $request)
    {
        $Model = Model::create($request->only(['id_number','name', 'email', 'phone', 'birthdate', 'city_id']));
        $Model->password = bcrypt($request->password);
        if ($request->hasFile('image')) {
            $Model->image = Upload::UploadFile($request->image, 'Parents');
        }
        $Model->save();
        alert()->success(__('trans.addedSuccessfully'));

        return redirect()->back();
    }

    public function show($id)
    {
        $Model = Model::where('id', $id)->firstorfail();

        return view('parent::show', compact('Model'));
    }

    public function edit($id)
    {
        $Model = Model::where('id', $id)->firstorfail();
        $cities = City::all();
        return view('parent::edit', compact('Model','cities'));
    }

    public function update(UpdateRequest $request, $id)
    {
        $Model = Model::where('id', $id)->firstorfail();
        $Model->update($request->only(['id_number','name', 'email', 'phone', 'birthdate', 'city_id']));
        if ($request->hasFile('image')) {
            $Model->image = Upload::UploadFile($request->image, 'Clients');
        }
        if ($request->password) {
            $Model->password = bcrypt($request->password);
        }
        $Model->save();
        alert()->success(__('trans.updatedSuccessfully'));

        return redirect()->back();
    }

    public function destroy($id)
    {
        $Model = Model::where('id', $id)->delete();
    }

} //end of class
