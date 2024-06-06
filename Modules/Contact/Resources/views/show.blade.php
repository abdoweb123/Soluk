@extends(ucfirst(activeGuard()).'.Layouts.layout')
@section('pagetitle', __('trans.contact_us'))
@section('content')

<table class="table">
    <tr>
        <td class="text-center">
            <div class="row justify-content-between">
                <div class="col text-center"> {{ $Model['name'] }}</div>
                <div class="col text-center"> {{ $Model['phone'] }}</div>
                <div class="col text-center"> {{ $Model['email'] }}</div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            {{ $Model['message'] }}
        </td>
    </tr>


</table>

@endsection

