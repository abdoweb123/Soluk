<?php

namespace Modules\Parent\Http\Resources;

use App\Http\Resources\BaseResource;

class ParentResource extends BaseResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'full_name' => $this->name,
            'email' => $this->email,
            'id_number' => $this->id_number,
            'image' => asset($this->image ?? setting('logo')),
        ];
    }
}
