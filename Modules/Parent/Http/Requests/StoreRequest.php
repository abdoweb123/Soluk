<?php

namespace Modules\Parent\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id_number' => 'required|string|max:255|unique:parents,id_number',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:parents,email',
//            'phone' => 'required|string|max:20',
            'birthdate' => 'required|date',
            'city_id' => 'required|exists:cities,id',
            'password' => 'required|string|min:8|confirmed',
        ];
    }
}
