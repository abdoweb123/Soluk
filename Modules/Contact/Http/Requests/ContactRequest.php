<?php

namespace Modules\Contact\Http\Requests;

use App\Http\Requests\API\BaseRequest;

class ContactRequest extends BaseRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ];
    }
}

