<?php

namespace Modules\Contact\Http\Controllers;

use App\Http\Controllers\BasicController;
use Illuminate\Http\Request;
use Modules\Contact\Entities\Model;

class Controller extends BasicController
{

    public function index(Request $request)
    {
        $Models = Model::get();

        return view('contact::index', compact('Models'));
    }


    public function show($id)
    {
        $Model = Model::where('id', $id)->firstorfail();

        return view('contact::show', compact( 'Model'));
    }


    public function destroy($id)
    {
        $Model = Model::where('id', $id)->delete();
    }


} //end of class
