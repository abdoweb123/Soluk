@extends(ucfirst(activeGuard()).'.Layouts.layout')
@section('pagetitle',__('trans.specialists'))

@section('content')
<form action="{{ route(activeGuard().'.specialists.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('post')

    <div class="text-center">
        <img src="{{ asset(setting('logo')) }}" class="rounded mx-auto text-center"  id="image"  height="200px">
    </div>

    <div class="row">
        <div class="col-md-6 ">
            <label for="name">{{ __('trans.name') }}</label>
            <input type="text" name="name" id="name" placeholder="{{ __('trans.name') }}" class="form-control" value="{{ old('name') }}" required>
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="email">{{ __('trans.email') }}</label>
            <input type="email" name="email" placeholder="{{ __('trans.email') }}" class="form-control" value="{{ old('email') }}" required>
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="phone">{{ __('trans.phone') }}</label>
            <input name="phone" id="phone" type="text" class="form-control" placeholder="{{ __('trans.phone') }}" value="{{ old('phone') }}" required>
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
