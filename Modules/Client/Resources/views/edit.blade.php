@extends(ucfirst(activeGuard()).'.Layouts.layout')
@section('pagetitle', __('trans.clients'))

@section('content')

<form action="{{ route(activeGuard().'.clients.update', ['client'=>$Model]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="text-center">
        <img src="{{ asset($Model->image ?? setting('logo')) }}" class="rounded mx-auto text-center"  id="image"  height="200px">
    </div>
    <div class="row">
        <div class="col-12"></div>
        <div class="col-md-6 ">
            <label for="name">{{ __('trans.name') }}</label>
            <input value="{{ $Model->name }}" type="text" name="name" id="name" parsley-trigger="change" required value="" class="form-control">
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="email">{{ __('trans.email') }}</label>
            <input value="{{ $Model->email }}" type="email" name="email" parsley-trigger="change" value="" required class="form-control">
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="phone">{{ __('trans.phone') }}</label>
            <input type="hidden" name="country_code" id="country_code" value="{{ old('country_code',$Model->country_code) }}">
            <input type="hidden" name="phone_code" id="phone_code" value="{{ old('phone_code',$Model->phone_code) }}">
            <input name="phone" id="phone" type="tel" class="form-control" value="{{ old('phone',$Model->phone) }}">
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="password">{{ __('trans.password') }}</label>
            <input type="password" name="password" id="password" parsley-trigger="change" class="form-control" data-parsley-id="10">
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="password_confirmation">{{ __('trans.confirmPassword') }}</label>
            <input type="password" name="password_confirmation" id="password_confirmation" parsley-trigger="change" class="form-control" data-parsley-id="10">
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="image">{{ __('trans.image') }}</label>
            <input class="form-control w-100" id="image" type="file" name="image" onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])">
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="points">{{ __('trans.points') }}</label>
            <input value="{{ $Model->points }}" min="0" type="number" name="points" parsley-trigger="change" value="" required class="form-control">
        </div>
        <div class="clearfix"></div>
        <div class="col-12 my-4">
            <div class="button-group my-4">
                <button type="submit" class="main-btn btn-hover w-100 text-center">
                    {{ __('trans.Submit') }}
                </button>
            </div>
        </div>
    </div>
</form>

@include('intlTelInput',['country_code'=>$Model->country_code])
@endsection
