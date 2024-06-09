<?php

namespace Modules\ServiceDetail\Http\Controllers;

use App\Functions\ResponseHelper;
use App\Http\Controllers\BasicController;
use Modules\ServiceDetail\Entities\Model;
use Modules\ServiceDetail\Http\Requests\ServiceDetailRequest;
use Modules\ServiceDetail\Entities\Model as ServiceDetail;
use Modules\Program\Entities\Model as Program;
use Modules\ServiceDetail\Http\Resources\ServiceDetailsResource;
use Modules\Program\Http\Resources\ProgramResource;

class APIController extends BasicController
{
    public function index(ServiceDetailRequest $request)
    {
         $program = Program::query()->find($request->program_id);

         $servicesOfProgram = ServiceDetail::query()->Active()->where('program_id',$request->program_id)->get();

         $data = [
             'program' => ProgramResource::make($program),
             'services' => ServiceDetailsResource::collection($servicesOfProgram),
         ];

         ResponseHelper::make($data,__('trans.Data_fetched_successfully'));
    }
}
