@extends(ucfirst(activeGuard()).'.Layouts.layout')
@section('pagetitle', __('trans.beneficiaries'))
@section('content')
<form method="POST" action="{{ route(activeGuard().'.beneficiaries.update',$Model) }}" enctype="multipart/form-data" >
    @csrf
    @method('PUT')
    <div class="row">

        <div class="col-md-6">
            <label for="title_ar">@lang('trans.title_ar')</label>
            <input id="title_ar" type="text" name="title_ar" placeholder="@lang('trans.title_ar')" class="form-control" value="{{ $Model['title_ar'] }}" required>
        </div>
        <div class="col-md-6">
            <label for="title_en">@lang('trans.title_en')</label>
            <input id="title_en" type="text" name="title_en" placeholder="@lang('trans.title_en')" class="form-control" value="{{ $Model['title_en'] }}" required>
        </div>

        <div class="col-12">
            <div class="button-group my-4">
                <button type="submit" class="main-btn btn-hover w-100 text-center">
                    {{ __('trans.Submit') }}
                </button>
            </div>
        </div>
    </div>
</form>
@endsection
