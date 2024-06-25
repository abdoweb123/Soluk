<?php

namespace Modules\Parent\Http\Controllers;

use App\Functions\ResponseHelper;
use App\Functions\Upload;
use App\Http\Controllers\BasicController;
use Illuminate\Http\Request;
use Modules\Parent\Entities\Model as Parents;
use Modules\Parent\Http\Requests\CheckExistsRequest;
use Modules\Parent\Http\Requests\DeviceTokenRequest;
use Modules\Parent\Http\Requests\LoginRequest;
use Modules\Parent\Http\Requests\OldPasswordRequest;
use Modules\Parent\Http\Requests\RegisterRequest;
use Modules\Parent\Http\Requests\UpdateProfileRequest;
use Modules\Parent\Http\Resources\ParentResource;

class APIController extends BasicController
{

    public function Login(LoginRequest $request)
    {
        if (Auth('parent')->attempt(['id_number' => $request->id_number, 'password' => $request->password, 'deleted_at' => null,])) {
            $model = Auth('parent')->user();
        } else {
            ResponseHelper::make(null, __('public.idPasswordIncorrect'), false, 404);
        }

        // To store only one device token
        $model->DeviceTokens()->delete();
        $model->DeviceTokens()->create([
            'device_token' => $request->device_token,
        ]);

        $response['token'] = $model->createToken('ParentToken')->plainTextToken;
        $response['parent'] = ParentResource::make($model);

         ResponseHelper::make($response, __('public.loginSuccessfully'));
    }

    public function profile()
    {
        // For ios (for guests)
        if(!auth('sanctum')->check())
        {
            return ResponseHelper::make(null, __('public.You not auth'), true, 200);
        }

        $this->CheckAuth();
        $response['token'] = request()->bearerToken();
        $response['client'] = ParentResource::make($this->Parent);

        return ResponseHelper::make($response);

    }

    public function UpdateProfile(UpdateProfileRequest $request)
    {
        $this->CheckAuth();
        $model = $this->Parent;

        $phone_code = str_replace('+', '', $request->phone_code);

        $model->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone_code'=>$phone_code,
            'phone'=>$request->phone,
        ]);

        $response['token'] = request()->bearerToken();
        $response['client'] = ParentResource::make($model->refresh());

        return ResponseHelper::make($response, __('public.updatedSuccessfully'));
    }

    public function UpdateImage(Request $request)
    {
        $this->CheckAuth();
        $model = $this->Parent;
        if (request('image')) {
            $model->update(['image' => Upload::UploadFile(request('image'), 'Clients')]);
        }

        $response['token'] = request()->bearerToken();
        $response['client'] = ParentResource::make($model->refresh());

        return ResponseHelper::make($response, __('public.updatedSuccessfully'));
    }

    public function Logout(Request $request)
    {
        $request->validate([
            'device_token'=>'required'
        ]);

        $auth = $this->CheckAuth();
        $auth->DeviceTokens()->where('device_token', request()->device_token)->delete();
        $auth->currentAccessToken()->delete();

        ResponseHelper::make(null, __('public.logoutSuccessfully'));
    }

    public function changeLang(Request $request)
    {
        $auth = $this->CheckAuth();

        $request->validate([
            'lang' => 'required|in:ar,en',
        ]);

        $auth->lang = $request->lang;
        $auth->save();

        ResponseHelper::make(null, __('public.updatedSuccessfully'));
    }

    public function DeleteAccount(Request $request)
    {
        $request->validate([
            'device_token'=>'required'
        ]);

        $auth = $this->CheckAuth();
        $auth->DeviceTokens()->where('device_token', request()->device_token)->delete();
        $auth->tokens()->delete();
        $auth->delete();

        ResponseHelper::make(null, __('public.DeletedSuccessfully'));
    }

} //end of class
