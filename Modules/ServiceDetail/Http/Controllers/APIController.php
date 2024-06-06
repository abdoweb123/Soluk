<?php

namespace Modules\ServiceDetail\Http\Controllers;

use App\Functions\ResponseHelper;
use App\Http\Controllers\BasicController;
use Modules\ServiceDetail\Entities\Model;
use Modules\ServiceDetail\Http\Requests\ServiceDetailRequest;
use Modules\ServiceDetail\Entities\Model as ServiceDetail;
use Modules\ServiceDetail\Http\Resources\ServiceDetailsResource;

class APIController extends BasicController
{
    public function index(ServiceDetailRequest $request)
    {
         $servicesOfProgram = ServiceDetail::query()->Active()->where('program_id',$request->program_id)->get();

         $services = ServiceDetailsResource::collection($servicesOfProgram);

         ResponseHelper::make($services,__('trans.Data_fetched_successfully'));
    }
}
