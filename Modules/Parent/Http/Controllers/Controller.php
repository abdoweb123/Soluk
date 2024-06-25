<?php

namespace Modules\Parent\Http\Controllers;

use App\Functions\Upload;
use App\Http\Controllers\BasicController;
use App\Models\City;
use Illuminate\Http\Request;
use Modules\Parent\Entities\Model;
use Modules\Parent\Http\Requests\StoreRequest;
use Modules\Parent\Http\Requests\UpdateRequest;

class Controller extends BasicController
{
    public function index(Request $request)
    {
        $Models = Model::get();

        return view('parent::index', compact('Models'));
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
