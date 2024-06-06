<?php

namespace Modules\Program\Http\Controllers;

use App\Functions\ResponseHelper;
use App\Http\Controllers\BasicController;
use Modules\Program\Entities\Model;
use Modules\Program\Http\Resources\ProgramResource;

class APIController extends BasicController
{
    public function index()
    {
        $Programs = Model::Active()->get();
        ResponseHelper::make(ProgramResource::collection($Programs),__('trans.Data_fetched_successfully'));
    }
}
