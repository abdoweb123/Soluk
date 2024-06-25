@extends(ucfirst(activeGuard()).'.Layouts.layout')

@section('pagetitle', __('trans.children_programs'))
@section('content')

<div class="row">
    <div class="my-2 col-6 text-sm-start">
        <a href="{{ route(activeGuard().'.children_programs.create') }}" class="main-btn">@lang('trans.add_new')</a>
    </div>
</div>
<table class="table table-bordered data-table text-center" >
    <thead>
        <tr>
            <th>#</th>
            <th>@lang('program')</th>
            <th>@lang('child')</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Models as $Model)
        <tr Role="row" class="odd">
            <td>{{ $loop->iteration }}</td>
            <td>{{ $Model->program?->title() }}</td>
            <td>{{ $Model->child?->name }}</td>
            <td>
                <a href="{{ route(activeGuard().'.children_programs.edit', ['child_id'=>$Model->child_id,'program_id'=>$Model->program_id,]) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                <a href="{{ route(activeGuard().'.children_programs.show', ['child_program'=>$Model]) }}"><i class="fa-solid fa-eye"></i></a>
                <form class="formDelete" method="POST" action="{{ route(activeGuard().'.children_programs.destroy', ['child_program'=>$Model]) }}">
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
