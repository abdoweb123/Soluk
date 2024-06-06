@extends(ucfirst(activeGuard()).'.Layouts.layout')
@section('pagetitle', __('trans.terms'))
@section('content')

<table class="table">
    <tr>
        <td class="text-center">
            {{ $Model['title_en'] }}
        </td>
        <td class="text-center">
            {{ $Model['title_ar'] }}
        </td>
    </tr>
    <tr>
        <td class="text-center">
            {{ $Model['desc_en'] }}
        </td>
        <td class="text-center">
            {{ $Model['desc_ar'] }}
        </td>
    </tr>
</table>

@endsection
