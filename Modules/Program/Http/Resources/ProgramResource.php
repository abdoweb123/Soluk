<?php

namespace Modules\Program\Http\Resources;

use App\Http\Resources\BaseResource;

class ProgramResource extends BaseResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this['title_'.lang()],
            'desc' => $this['desc_'.lang()],
            'image' => asset($this->image ?? setting('logo')),
        ];
    }
    
}