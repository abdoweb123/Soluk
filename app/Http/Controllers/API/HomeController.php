<?php

namespace App\Http\Controllers\API;

use App\Functions\ResponseHelper;
use App\Http\Controllers\BasicController;
use App\Http\Requests\API\HomeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Modules\Driver\Entities\Model as Driver;
use Modules\Client\Entities\Model as Client;


class HomeController extends BasicController
{
    public function home(HomeRequest $request)
    {

        return ResponseHelper::make(1);
    }



}//end of class
