<?php

namespace Modules\ServiceDetail\Http\Requests;

use App\Http\Requests\API\BaseRequest;

class ServiceDetailRequest extends BaseRequest
{
    public function rules()
    {
        return [
            'program_id' => 'required|exists:programs,id',
        ];
    }
}

