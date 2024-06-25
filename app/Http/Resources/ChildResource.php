<?php

namespace App\Http\Resources;

class ChildResource extends BaseResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'age' => $this->age . ' ' . __('trans.years'),
            'programs' => $this->whenLoaded('programs', function () {
                return $this->programs->map(function ($program) {
                    return [
                        'id' => $program->id,
                        'title' => $program->title,
                    ];
                });
            }),
        ];
    }
}
