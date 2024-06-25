<?php

namespace Modules\Parent\Http\Requests;

use App\Http\Requests\API\BaseRequest;
use Illuminate\Validation\Rule;

class LoginRequest extends BaseRequest
{
    public function rules()
    {
        return [
            'id_number' => ['required', 'exists:parents,id_number'],
            'password' => ['required'],
            'device_token' => ['required'],
        ];
    }
}
