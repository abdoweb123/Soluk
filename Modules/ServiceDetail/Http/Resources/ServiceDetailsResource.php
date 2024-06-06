<?php

namespace Modules\ServiceDetail\Http\Resources;

use App\Http\Resources\BaseResource;

class ServiceDetailsResource extends BaseResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'program' => $this->program->title() ?? '',
            'service' => $this->service->title() ?? '',
            'service_details' => $this->service['desc_'.lang()] ?? '',
            'beneficiaries' => $this->beneficiary->title() ?? '',
            'center' => $this->center->title() ?? '',
            'age_range' => $this['age_range_'.lang()],
            'sessions_count' => $this['sessions_count_'.lang()],
            'session_duration' => $this['session_duration_'.lang()],


        ];
    }
    
}