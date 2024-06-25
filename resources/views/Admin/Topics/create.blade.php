@extends(ucfirst(activeGuard()).'.Layouts.layout')
@section('pagetitle',__('trans.topics'))

@section('content')
<form action="{{ route(activeGuard().'.topics.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('post')

    <div class="text-center">
        <img src="{{ asset(setting('logo')) }}" class="rounded mx-auto text-center"  id="image"  height="200px">
    </div>

    <div class="row">

        <div class="col-md-6 col-sm-12">
            <label for="title_ar">{{ __('trans.title_ar') }}</label>
            <input class="form-control w-100" type="text" name="title_ar" required>
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="title_en">{{ __('trans.title_en') }}</label>
            <input class="form-control w-100" type="text" name="title_en" required>
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="title_ar">{{ __('trans.desc_ar') }}</label>
            <textarea name="desc_ar" class="form-control" cols="10" rows="5" required></textarea>
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="title_en">{{ __('trans.desc_en') }}</label>
            <textarea name="desc_en" class="form-control" cols="10" rows="5" required></textarea>
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
