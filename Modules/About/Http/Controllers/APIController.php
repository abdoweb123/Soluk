<?php

namespace Modules\About\Http\Controllers;

use App\Functions\ResponseHelper;
use App\Http\Controllers\BasicController;
use Modules\About\Entities\Model;

class APIController extends BasicController
{
    public function index()
    {
        $about = Model::select('title_'.lang().' AS title', 'desc_'.lang().' AS desc')->get();
        ResponseHelper::make($about,__('trans.Data_fetched_successfully'));
    }
}
