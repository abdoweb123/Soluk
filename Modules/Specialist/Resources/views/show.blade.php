@extends(ucfirst(activeGuard()).'.Layouts.layout')
@section('pagetitle', __('trans.specialists'))
@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-6">
                    <h2 class="box-title mt-5 bold">{{ $Model['name'] }}</h2>
                    <h2 class="mt-5 ">{{ $Model['phone '] }}</h2>
                    <h2 class="mt-5 ">{{ $Model['email'] }}</h2>
                    <h2 class="mt-5 ">{{ $Model['phone'] }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
