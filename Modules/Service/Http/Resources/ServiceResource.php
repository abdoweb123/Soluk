<?php

namespace Modules\Service\Http\Resources;

use App\Http\Resources\BaseResource;

class ServiceResource extends BaseResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this['title_'.lang()],
            'desc' => $this['desc_'.lang()],
            'image' => asset($this->file ?? setting('logo')),
        ];
    }
    
}