<?php

namespace App\Http\Resources;

class ChildrenResource extends BaseResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'age' => $this->age. ' '.__('trans.years'),
        ];
    }
}
