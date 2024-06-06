@extends('Admin.Layouts.layout')
@section('pagetitle',__('trans.dashboardTitle'))

@section('content')

<div class="text-center">
    <img src="{{ asset(setting('logo')) }}" alt="Logo" style="max-width: 200px">
    <h1>
        @lang('trans.WelcomeBack')
    </h1>
</div>


@endsection


@section('script')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    @if (session()->has('toast_message_admin'))
        <script>
            // Display the toast notification
            // toast('{{ Session::get('toast_message') }}', 'error');
            var toastMessage = '{{ Session::get('toast_message_admin') }}';
            if (toastMessage) {
                Toastify({
                    text: toastMessage,
                    duration: 2500, // 3 seconds
                    close: false,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "linear-gradient(to right, #52bcbe, #52bcbe)",
                    width: "500px",
                }).showToast();

            }
        </script>
    @endif
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
@stop

@section('style')

@stop