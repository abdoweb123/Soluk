@extends(ucfirst(activeGuard()).'.Layouts.layout')

@section('pagetitle', __('trans.contact_us'))
@section('content')

<div class="row">
    <div class="my-2 col-6 text-sm-end">
        <button type="button" id="DeleteSelected" onclick="DeleteSelected('contacts')" class="btn btn-danger" disabled>@lang('trans.Delete_Selected')</button>
    </div>
</div>
<table class="table table-bordered data-table" >
    <thead>
        <tr>
            <th><input type="checkbox" id="ToggleSelectAll" class="main-btn"></th>
            <th>#</th>
            <th>@lang('trans.name')</th>
            <th>@lang('trans.phone')</th>
            <th>@lang('trans.email')</th>
            <th>@lang('trans.message')</th>
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
            <td>{{ $Model->name }}</td>
            <td>{{ $Model->phone }}</td>
            <td>{{ $Model->email }}</td>
            <td>
                {{ strlen($Model->message) > 50 ? substr($Model->message, 0, 50) . '...' : $Model->message }}
            </td>
            <td>
                <a href="{{ route(activeGuard().'.contacts.show', $Model) }}"><i class="fa-solid fa-eye"></i></a>
                <form class="formDelete" method="POST" action="{{ route(activeGuard().'.contacts.destroy', $Model) }}">
                    @csrf
                    @method('DELETE')
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
