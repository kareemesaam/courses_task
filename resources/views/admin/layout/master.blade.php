<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title> Admin Area |  @yield('title')</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

	<link rel="icon" href="{{asset('logo/image.png')}}" type="image/x-icon"/>
    <meta name="keywords" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- text editor -->
{{--    <link href="{{asset('backend/build/css/keditor.min.css')}}" rel="stylesheet">--}}


    <!-- Fonts and icons -->
	<script src="{{asset('backend/js/plugin/webfont/webfont.min.js')}}"></script>
    <script>
        WebFont.load({
            google: {"families":["Lato:300,400,700,900"]},
            custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{asset('backend/css/fonts.min.css')}}']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!-- CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/atlantis.min.css')}}">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{{asset('backend/css/demo.css')}}">
	<link rel="stylesheet" href="{{asset('backend/css/tagTypehead.css')}}">

    @yield('style')
</head>
<body>
<div class="wrapper">

    @include('admin.layout.navbar')
    @include('admin.layout.sidebar')

    <div class="main-panel">
        <div class="content">
            @include('admin.elements.flash')
            @yield('content')
        </div>
            @include('admin.layout.footer')
    </div>

<!--   Core JS Files   -->
<script src="{{asset('backend/js/core/jquery.3.2.1.min.js')}}"></script>
<script src="{{asset('backend/js/core/popper.min.js')}}"></script>
<script src="{{asset('backend/js/core/bootstrap.min.js')}}"></script>
<!-- jQuery UI -->
<script src="{{asset('backend/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
<script src="{{asset('backend/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>
<script src="{{asset('backend/js/plugin/sweetalert/sweetalert.min.js')}}"></script>

<!-- jQuery Scrollbar -->
<script src="{{asset('backend/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
<!-- Atlantis DEMO methods, don't include it in your project! -->
<script src="{{asset('backend/js/atlantis.min.js')}}"></script>
<script src="{{asset('backend/js/setting-demo2.js')}}"></script>

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>--}}
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>--}}
{{--<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>--}}

<script src="{{asset('backend/build/keditor.min.js')}}"></script>
<!-- Datatables -->
<script src="{{asset('backend/js/plugin/datatables/datatables.min.js')}}"></script>

<script src="{{asset('backend/src/lang/index.js')}}"></script>
<script src="{{asset('backend/js/selectize.js')}}"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.10.1/Sortable.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.4/clipboard.min.js"></script>--}}

{{--<script src="{{asset('backend/js/tagsinput.js')}}"></script>--}}
{{--<script src="{{asset('backend/js/typeahead.js')}}"></script>--}}
{{--<script>--}}
{{--    let msgUnavailable = '{{__("Cannot used this option, contact your service provider to activate it")}}';--}}
{{--    function Unavailable() {--}}
{{--        swal({--}}
{{--            title: '{{__("Unavailable")}}',--}}
{{--            text: msgUnavailable,--}}
{{--            icon: "error",--}}
{{--            buttons: false,--}}
{{--            dangerMode: true,--}}
{{--        })--}}
{{--    };--}}
{{--</script>--}}
@yield('script')
</body>
</html>
