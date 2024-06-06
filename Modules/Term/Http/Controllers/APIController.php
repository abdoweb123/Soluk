<?php

namespace Modules\Term\Http\Controllers;

use App\Functions\ResponseHelper;
use App\Http\Controllers\BasicController;
use Modules\Term\Entities\Model;

class APIController extends BasicController
{
    public function index()
    {
        $terms = Model::select('title_'.lang().' AS title', 'desc_'.lang().' AS desc')->get();
        ResponseHelper::make($terms,__('trans.Data_fetched_successfully'));
    }
}
