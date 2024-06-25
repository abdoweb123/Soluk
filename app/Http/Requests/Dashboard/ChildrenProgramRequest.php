<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class ChildrenProgramRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Optionally, define authorization logic here if needed
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'child_id' => 'required|exists:children,id',
            'program_id' => 'required|exists:programs,id',
            'topic_id' => 'required|array|min:1',
            'topic_id.*' => 'exists:topics,id',
        ];
    }


}