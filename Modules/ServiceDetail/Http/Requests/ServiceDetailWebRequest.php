<?php

namespace Modules\ServiceDetail\Http\Requests;

use App\Http\Requests\API\BaseRequest;

class ServiceDetailWebRequest extends BaseRequest
{
    public function rules()
    {
        return [
            'service_id' => 'required|exists:services,id',
            'beneficiary_id' => 'required|exists:beneficiaries,id',
            'center_id' => 'required|exists:centers,id',
            'age_group_ar' => 'required|string',
            'age_range_ar' => 'required|string',
            'sessions_count_ar' => 'required|string',
            'age_group_en' => 'required|string',
            'age_range_en' => 'required|string',
            'sessions_count_en' => 'required|string',
        ];
    }
}

