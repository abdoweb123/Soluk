<?php

namespace Modules\Contact\Http\Controllers;

use App\Functions\ResponseHelper;
use App\Http\Controllers\BasicController;
use Illuminate\Http\Request;
use Modules\Contact\Entities\Model;
use Modules\Contact\Http\Requests\ContactRequest;

class APIController extends BasicController
{
    public function store(ContactRequest $request)
    {
        $contact= Model::query()->create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'message'=>$request->message,
        ]);

        return ResponseHelper::make($contact, __('trans.addedSuccessfully'));
    }


} //end of class
