@extends(ucfirst(activeGuard()).'.Layouts.layout')

@section('pagetitle', __('trans.topics'))
@section('content')

<div class="row">
    <div class="my-2 col-6 text-sm-start">
        <a href="{{ route(activeGuard().'.topics.create') }}" class="main-btn">@lang('trans.add_new')</a>
    </div>
</div>
<table class="table table-bordered data-table text-center" >
    <thead>
        <tr>
            <th>#</th>
            <th>@lang('trans.title_ar')</th>
            <th>@lang('trans.title_en')</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Models as $Model)
        <tr Role="row" class="odd">
            <td>{{ $loop->iteration }}</td>
            <td>{{ $Model->title_ar }}</td>
            <td>{{ $Model->title_en }}</td>
            <td>
                <a href="{{ route(activeGuard().'.topics.edit', ['topic'=>$Model]) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                <a href="{{ route(activeGuard().'.topics.show', ['topic'=>$Model]) }}"><i class="fa-solid fa-eye"></i></a>
                <form class="formDelete" method="POST" action="{{ route(activeGuard().'.topics.destroy', ['topic'=>$Model]) }}">
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
