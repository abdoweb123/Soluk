<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BasicController;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Modules\Client\Entities\Model as Client;
use Modules\Driver\Entities\Model as Driver;
use Modules\Ride\Entities\Model as Ride;
use Modules\Car\Entities\CarType;
use Modules\Car\Entities\Model as Car;
use Modules\Complaint\Entities\Model as Complaint;

class HomeController extends BasicController
{
    public function home(Request $request)
    {

        return view('Admin.home');
    }

} //end of class
