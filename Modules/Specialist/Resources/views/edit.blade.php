@extends(ucfirst(activeGuard()).'.Layouts.layout')
@section('pagetitle', __('trans.specialists'))

@section('content')

<form action="{{ route(activeGuard().'.specialists.update', ['specialist'=>$Model]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="text-center">
        <img src="{{ asset($Model->image ?? setting('logo')) }}" class="rounded mx-auto text-center"  id="image"  height="200px">
    </div>
    <div class="row">
        <div class="col-12"></div>
        <div class="col-md-6 ">
            <label for="name">{{ __('trans.name') }}</label>
            <input value="{{ $Model->name }}" type="text" name="name" id="name" placeholder="{{ __('trans.name') }}" class="form-control" required>
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="email">{{ __('trans.email') }}</label>
            <input value="{{ $Model->email }}" type="email" name="email" placeholder="{{ __('trans.email') }}" class="form-control" required>
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="phone">{{ __('trans.phone') }}</label>
            <input name="phone" id="phone" type="text" class="form-control" value="{{ old('phone',$Model->phone) }}" required>
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

@endsection
