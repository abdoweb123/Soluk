<?php

namespace App\Http\Controllers;

use App\Functions\ResponseHelper;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Request;

class BasicController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $Client;

    public $Driver;

    public $Employer;

    public function __construct(Request $request)
    {
        app()->setLocale(request()->lang ?? 'en');
    }

    public function CheckAuth()
    {
        if (auth('sanctum')->check() && str_contains(get_class(auth('sanctum')->user()), 'Admin')) {
           return $this->Admin = auth('sanctum')->user();
        } elseif (auth('sanctum')->check() && str_contains(get_class(auth('sanctum')->user()), 'Parent')) {
            return $this->Parent = auth('sanctum')->user();
        }else{
            return ResponseHelper::make([], __('public.You not auth'), true, 404);
        }
    }

    public function CheckCount($Data)
    {
        if ($Data->count() < 1) {
            return ResponseHelper::make([], __('public.Data not found'), true, 404);
        }
    }

    public function CheckExist($Model)
    {
        if (! $Model) {
            return ResponseHelper::make((object) [], __('public.Data not found'), true, 404);
        }
    }
}
