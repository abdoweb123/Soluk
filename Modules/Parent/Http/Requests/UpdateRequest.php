<?php

namespace Modules\Parent\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $userId = $this->route('parent'); // Assuming the user ID is passed as a route parameter

        $rules = [
            'id_number' => 'required|string|max:255|unique:parents,id_number,' . $userId,
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:parents,email,' . $userId,
            'phone' => 'required|string|max:20',
            'birthdate' => 'required|date',
            'city_id' => 'required|exists:cities,id',
        ];

        if ($this->has('password') && request()->password != null) {
            $rules['password'] = 'string|min:8|confirmed';
        }

        return $rules;
    }
}
