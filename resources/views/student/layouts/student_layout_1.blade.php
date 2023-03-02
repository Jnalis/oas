<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin &amp; Dashboard Template" name="description">
    <meta content="Themesdesign" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">

    <!-- Bootstrap Css -->
    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Icons Css -->
    <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="{{ asset('backend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css">


    {{-- Start Toastr --}}
    <link href="{{ asset('backend/plugins/toastr.css') }}" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('backend/assets/mystyle/student_home.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/assets/test/bootstrap.min.css') }}">

    <link href="{{ asset('assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css">

    @yield('css_wizard')
</head>

<body>
    {{-- Footer start --}}
    @include('student.components.header')
    {{-- Footer Ends --}}

    <div class="bg-overlay-2"></div>

    <div class="wrapper-page-2">


        @yield('content')


    </div>
    <!-- end -->


    {{-- Footer start --}}
    @include('student.components.footer')
    {{-- Footer Ends --}}


    <!-- JAVASCRIPT -->
    <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>

    <script src="{{ asset('backend/assets/js/app.js') }}"></script>


    {{-- <script src="{{ asset('backend/assets/test/parsley.min.js') }}"></script> --}}

    <script src="{{ asset('assets/libs/select2/js/select2.min.js') }}"></script>


    {{-- Starts Toastr --}}
    <script src="{{ asset('backend/plugins/toastr.min.js') }}"></script>
    <script>
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}"
        switch(type){
           case 'info':
           toastr.info(" {{ Session::get('message') }} ");
           break;

           case 'success':
           toastr.success(" {{ Session::get('message') }} ");
           break;

           case 'warning':
           toastr.warning(" {{ Session::get('message') }} ");
           break;

           case 'error':
               toastr.error(" {{ Session::get('message') }} ");
               break;
            }
            @endif
    </script>
    {{-- End Toastr --}}

    @yield('js_wizard')

</body>

</html>
