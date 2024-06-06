@extends(ucfirst(activeGuard()).'.Layouts.layout')

@section('pagetitle')
    @if(isset($program))
        <a href="{{route('admin.programs.show', $program->id )}}">{{ $program->title() }}</a> / {{ __('trans.serviceDetails') }}
    @else
        {{ __('trans.serviceDetails') }}
    @endif
@endsection


@section('content')

<div class="row">
    <div class="my-2 col-6 text-sm-start">
        <a href="{{ route(activeGuard().'.serviceDetails.create') }}" class="main-btn">@lang('trans.add_new')</a>
    </div>
    <div class="my-2 col-6 text-sm-end">
        <button type="button" id="DeleteSelected" onclick="DeleteSelected('service_details')" class="btn btn-danger" disabled>@lang('trans.Delete_Selected')</button>
    </div>
</div>
<table class="table table-bordered data-table" >
    <thead>
        <tr>
            <th><input type="checkbox" id="ToggleSelectAll" class="main-btn"></th>
            <th>#</th>
            <th>@lang('trans.service')</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Models as $Model)
        <tr>
            <td>
                <input type="checkbox" class="DTcheckbox" value="{{ $Model->id }}">
            </td>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $Model->service->title() }}</td>
            <td>
                <a href="{{ route(activeGuard().'.serviceDetails.show', $Model) }}"><i class="fa-solid fa-eye"></i></a>
                <a href="{{ route(activeGuard().'.serviceDetails.edit', $Model) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                <form class="formDelete" method="POST" action="{{ route(activeGuard().'.serviceDetails.destroy', $Model) }}">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <button type="button" class="btn btn-flat show_confirm" data-toggle="tooltip" title="Delete">
                        <i class="fa-solid fa-eraser"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
