@extends(ucfirst(activeGuard()).'.Layouts.layout')
@section('pagetitle',__('trans.parents'))

@section('content')
<form action="{{ route(activeGuard().'.parents.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('post')

    <div class="text-center">
        <img src="{{ asset(setting('logo')) }}" class="rounded mx-auto text-center"  id="image"  height="200px">
    </div>

    <div class="row">
        <div class="col-md-6 ">
            <label for="name">{{ __('trans.id_number') }}</label>
            <input type="text" name="id_number" class="form-control" value="{{ old('id_number') }}" required>
        </div>
        <div class="col-md-6 ">
            <label for="name">{{ __('trans.full_name') }}</label>
            <input type="text" name="name" id="name" parsley-trigger="change" required value="{{ old('name') }}" class="form-control">
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="email">{{ __('trans.email') }}</label>
            <input type="email" name="email" parsley-trigger="change" value="{{ old('email') }}" required class="form-control">
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="phone">{{ __('trans.phone') }}</label>
            <input name="phone" id="phone" type="tel" class="form-control" value="{{ old('phone') }}" required>
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="phone">{{ __('trans.birthdate') }}</label>
            <input name="birthdate" id="birthdate" type="date" class="form-control" value="{{ old('birthdate') }}" required>
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="phone">{{ __('trans.city') }}</label>
            <select name="city_id" class="form-control select2" required>
                <option value="" selected>----</option>
                @foreach($cities as $city)
                    <option value="{{$city->id}}">{{$city->title()}}</option>
                @endforeach
            </select>

        </div>
        <div class="col-md-6 col-sm-12">
            <label for="client_password">{{ __('trans.password') }}</label>
            <input type="password" name="password" parsley-trigger="change" class="form-control" data-parsley-id="10" required>
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="client_password">{{ __('trans.confirmPassword') }}</label>
            <input required type="password" name="password_confirmation" parsley-trigger="change" class="form-control" data-parsley-id="10">
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="image">{{ __('trans.image') }}</label>
            <input class="form-control w-100" id="image" type="file" name="image" onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])" >
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
