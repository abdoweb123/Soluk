@extends(ucfirst(activeGuard()).'.Layouts.layout')
@section('pagetitle', __('trans.serviceDetails'))
@section('content')

<table class="table">
    <tr>
        <td colspan="2" class="text-center">
            <img src="{{ asset($Model->file ?? setting('logo')) }}" class="rounded mx-auto text-center" id="file" height="200px">
        </td>
    </tr>
    <tr>
        <td class="text-center">
            {{ $Model->program->title() }}
        </td>
        <td class="text-center">
            {{ $Model->service->title() }}
        </td>
        <td class="text-center">
            {{ $Model->beneficiary->title() }}
        </td>
    </tr>

    <tr>
        <td class="text-center">
            {{ $Mode->center->title() }}
        </td>

        <td class="text-center">
            {{ $Model['age_group_'.lang()] }}
        </td>
        <td class="text-center">
            {{ $Model['age_range_'.lang()] }}
        </td>
        <td class="text-center">
            {{ $Model['sessions_count_'.lang()] }}
        </td>
    </tr>
    <tr>

    </tr>
</table>

@endsection
