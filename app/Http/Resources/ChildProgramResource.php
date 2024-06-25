<?php

namespace App\Http\Resources;

use Modules\Program\Entities\Model as Program;

class ChildProgramResource extends BaseResource
{
    public function toArray($request)
    {
        $childProgramsImages = Program::query()->pluck('file')->toArray();

        return [
            'sliders'=>$childProgramsImages,
            'id' => $this->id,
            'title' => $this->title(),
            'image' => $this->file,
            'desc' => $this['desc_'.lang()], // Assuming 'desc_' . lang() gives the appropriate description based on language
            'favorite' => $this->favorite ? 'yes' : 'no',
            'topics' => $this->topics->unique('id')->map(function ($topic) {
                return [
                    'id' => $topic->id,
                    'title' => $topic['title_'.lang()], // Accessing 'title' attribute of the Topic model
                    'image' => $topic->image ?? setting('logo'),
                    'desc' => $topic['desc_'.lang()], // Adjust if your field name differs
                ];
            }),
        ];
    }
}