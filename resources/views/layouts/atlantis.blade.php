<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>AssetHCQC - @yield('title')</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{asset('assets/img/icon.ico')}}" type="image/x-icon" />

	<!-- Fonts and icons -->
	<script src="{{asset('assets/js/plugin/webfont/webfont.min.js')}}"></script>
	<script>
		WebFont.load({
			google: { "families": ["Lato:300,400,700,900"] },
			custom: { "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{ asset('assets/css/fonts.min.css') }}'] },
			active: function () {
				sessionStorage.fonts = true;
			}
		});
	</script>
	@stack('prepend-style')
	<!-- CSS Files assets/css/bootstrap.min.css-->
	<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('/assets/css/atlantis.css')}}">

	{{-- <!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{{asset('/assets/css/demo.css')}}"> --}}
	@stack('addon-style')
</head>

<body data-background-color="bg3">
	<div class="wrapper">
		<div class="main-header">
			@include('includes.logo-header')
			@include('includes.navbar-header')
		</div>

		@include('includes.slidebar')

		<div class="main-panel">
			<div class="content">
				@yield('content')
			</div>

			@include('includes.footer')
		</div>

	</div>
	@stack('prepend-script')
	<!--   Core JS Files   -->
	<script src="{{ asset('assets/js/core/jquery.3.2.1.min.js' )}}"></script>
	<script src="{{asset('assets/js/core/popper.min.js')}}"></script>
	<script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>

	<!-- jQuery UI -->
	<script src="{{asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
	<script src="{{asset('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>

	<!-- jQuery Scrollbar -->
	<script src="{{asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>

	<!-- Bootstrap Notify -->
	<script src="{{asset('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>

	<!-- Sweet Alert -->
	<script src="{{asset('assets/js/plugin/sweetalert/sweetalert.min.js')}}"></script>

	<!-- Atlantis JS -->
	<script src="{{asset('assets/js/atlantis.min.js')}}"></script>
	@stack('addon-script')
</body>

</html>