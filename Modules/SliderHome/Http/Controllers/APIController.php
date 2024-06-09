<?php

namespace Modules\SliderHome\Http\Controllers;

use App\Functions\ResponseHelper;
use App\Http\Controllers\BasicController;
use Modules\SliderHome\Entities\Model as SliderHome;
use Modules\Program\Entities\Model as Program;
use Modules\SliderHome\Http\Resources\SliderHomeResource;
use Modules\Program\Http\Resources\ProgramResource;

class APIController extends BasicController
{
    public function index()
    {
        $sliderHome = SliderHome::Active()->get();

        $programs = Program::query()->Active()->take(6)->get();

        $data = [
            'sliderHome' => SliderHomeResource::collection($sliderHome),
            'programs' => ProgramResource::collection($programs),
        ];

        ResponseHelper::make($data,__('trans.Data_fetched_successfully'));
    }
}
