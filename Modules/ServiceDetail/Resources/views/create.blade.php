@extends(ucfirst(activeGuard()).'.Layouts.layout')

@section('pagetitle', __('trans.serviceDetails'))

@section('content')
<form method="POST" action="{{ route(activeGuard().'.serviceDetails.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="row">

        <div class="col-md-6">
            <label>@lang('trans.program')</label>
            <select name="program_id" class="form-control" required>
                <option value="">----</option>
                @foreach($programs as $program)
                    <option value="{{$program->id}}">{{$program->title()}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label>@lang('trans.service')</label>
            <select name="service_id" class="form-control" required>
                <option value="">----</option>
                @foreach($services as $service)
                    <option value="{{$service->id}}">{{$service->title()}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label>@lang('trans.beneficiary')</label>
            <select name="beneficiary_id" class="form-control" required>
                <option value="">----</option>
                @foreach($beneficiaries as $beneficiary)
                    <option value="{{$beneficiary->id}}">{{$beneficiary->title()}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label>@lang('trans.center')</label>
            <select name="center_id" class="form-control" required>
                <option value="">----</option>
                @foreach($centers as $center)
                    <option value="{{$center->id}}">{{$center->title()}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label>@lang('trans.age_group_ar')</label>
            <input type="text" name="age_group_ar" placeholder="جميع الفئات العمرية" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label>@lang('trans.age_group_en')</label>
            <input type="text" name="age_group_en" placeholder="All age groups" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label>@lang('trans.age_range_ar')</label>
            <input type="text" name="age_range_ar" placeholder="2-سنة - 45 سنة" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label>@lang('trans.age_range_en')</label>
            <input type="text" name="age_range_en" placeholder="2-year - 45 years" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label>@lang('trans.sessions_count_ar')</label>
            <input type="text" name="sessions_count_ar" placeholder="4-6 حصص (60 دقيقة لكل حصة)" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label>@lang('trans.sessions_count_en')</label>
            <input type="text" name="sessions_count_en" placeholder="4-6 Sessions (60 minutes per class)" class="form-control" required>
        </div>

        <div class="row">
            <div class="col-sm-12 my-4">
                <div class="text-center p-20">
                    <button type="submit" class="main-btn">{{ __('trans.add') }}</button>
                    <button type="reset" class="btn btn-secondary">{{ __('trans.cancel') }}</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
