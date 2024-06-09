<?php

namespace Modules\ServiceDetail\Http\Resources;

use App\Http\Resources\BaseResource;

class ServiceDetailsResource extends BaseResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'service' => $this->service['title_'.lang()] ?? '',
            'service_details' => $this->service['desc_'.lang()] ?? '',
            'beneficiaries' => $this->beneficiary['title_'.lang()] ?? '',
            'center' => $this->center['title_'.lang()] ?? '',
            'age_group' => $this['age_group_'.lang()],
            'age_range' => $this['age_range_'.lang()],
            'sessions_count' => $this['sessions_count_'.lang()],
        ];
    }
    
}