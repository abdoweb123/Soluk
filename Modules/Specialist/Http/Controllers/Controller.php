<?php

namespace Modules\Specialist\Http\Controllers;

use App\Functions\Upload;
use App\Http\Controllers\BasicController;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Modules\Specialist\Entities\Model;

class Controller extends BasicController
{
    public function index(Request $request)
    {
        $Models = Model::get();

        return view('specialist::index', compact('Models'));
    }

    public function create()
    {
        return view('specialist::create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:specialists,email',
            'phone' => 'required|string|max:20',
        ]);

        // Create a new Model instance with validated data
        $Model = Model::create($validatedData);

        $Model->save();
        alert()->success(__('trans.addedSuccessfully'));
        return redirect()->back();
    }

    public function show($id)
    {
        $Model = Model::where('id', $id)->firstorfail();

        return view('specialist::show', compact('Model'));
    }

    public function edit($id)
    {
        $Model = Model::where('id', $id)->firstorfail();

        return view('specialist::edit', compact('Model'));
    }

    public function update(Request $request, $id)
    {
        $Model = Model::where('id', $id)->firstorfail();

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('specialists')->ignore($id), // Ignore the current record with ID $id
            ],
            'phone' => 'required|string|max:20',
        ]);

        $Model->update($validatedData);
        $Model->save();
        alert()->success(__('trans.updatedSuccessfully'));
        return redirect()->back();
    }

    public function destroy($id)
    {
        $Model = Model::where('id', $id)->delete();
    }

} //end of class
