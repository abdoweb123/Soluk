<?php

namespace App\Http\Controllers;

;

use App\Functions\Upload;
use App\Http\Requests\Dashboard\TopicRequest;
use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends BasicController
{
    public function index(Request $request)
    {
        $Models = Topic::get();

        return view('Admin.Topics.index', compact('Models'));
    }

    public function create()
    {
        return view('Admin.Topics.create');
    }

    public function store(TopicRequest $request)
    {
        $Model = Topic::create($request->only(['title_ar','title_en', 'desc_ar', 'desc_en']));
        if ($request->hasFile('image')) {
            $Model->image = Upload::UploadFile($request->image, 'Topics');
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
