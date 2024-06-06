@extends(ucfirst(activeGuard()).'.Layouts.layout')
@section('pagetitle', __('trans.serviceDetails'))
@section('content')
<form method="POST" action="{{ route(activeGuard().'.serviceDetails.update',$Model) }}" enctype="multipart/form-data" >
    @csrf
    @method('PUT')
    <div class="row">

        <div class="col-md-6">
            <label>@lang('trans.program')</label>
            <select name="program_id" class="form-control" required>
                <option value="">----</option>
                @foreach($programs as $program)
                    <option value="{{$program->id}}" {{$Model->program_id == $program->id ? 'selected' : ''}}>{{$program->title()}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label>@lang('trans.service')</label>
            <select name="service_id" class="form-control" required>
                <option value="">----</option>
                @foreach($services as $service)
                    <option value="{{$service->id}}" {{$Model->service_id == $service->id ? 'selected' : ''}}>{{$service->title()}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label>@lang('trans.beneficiary')</label>
            <select name="beneficiary_id" class="form-control" required>
                <option value="">----</option>
                @foreach($beneficiaries as $beneficiary)
                    <option value="{{$beneficiary->id}}" {{$Model->beneficiary_id == $beneficiary->id ? 'selected' : ''}}>{{$beneficiary->title()}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label>@lang('trans.center')</label>
            <select name="center_id" class="form-control" required>
                <option value="">----</option>
                @foreach($centers as $center)
                    <option value="{{$center->id}}" {{$Model->center_id == $center->id ? 'selected' : ''}}>{{$center->title()}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label>@lang('trans.age_range_ar')</label>
            <input type="text" name="age_range_ar" placeholder="@lang('trans.age_range_ar')" value="{{$Model->age_range_ar}}" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label>@lang('trans.age_range_en')</label>
            <input type="text" name="age_range_en" placeholder="@lang('trans.age_range_en')" value="{{$Model->age_range_en}}" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label>@lang('trans.sessions_count_ar')</label>
            <input type="text" name="sessions_count_ar" placeholder="@lang('trans.sessions_count_ar')" value="{{$Model->sessions_count_ar}}" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label>@lang('trans.sessions_count_en')</label>
            <input type="text" name="sessions_count_en" placeholder="@lang('trans.sessions_count_en')" value="{{$Model->sessions_count_en}}" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label>@lang('trans.session_duration_ar')</label>
            <input type="text" name="session_duration_ar" placeholder="@lang('trans.session_duration_ar')" value="{{$Model->session_duration_ar}}" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label>@lang('trans.session_duration_en')</label>
            <input type="text" name="session_duration_en" placeholder="@lang('trans.session_duration_en')" value="{{$Model->session_duration_en}}" class="form-control" required>
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
