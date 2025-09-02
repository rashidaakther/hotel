<!DOCTYPE html>

<html lang="en-US">

<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">


    <title> @yield('title')</title>   

	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{ asset('images/icon.png') }}" />
	<link href="{{ asset('assets/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	
	<!-- Style css -->
	<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
	
    @yield('style')
</head>
<body>

	<div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
	</div>
		<div class="nav-header text-center">
			<a href="{{ route('dashboard') }}" class="brand-logo" style="display: inline">
				<img src="{{ asset('images/logo.png') }}" style="width: 100px;">
			</a>
			<div class="nav-control">
				<div class="hamburger">
					<span class="line"></span><span class="line"></span><span class="line"></span>
				</div>
			</div>
		</div>

        @include('admin.layouts.header')
        @include('admin.layouts.sidebar')
        @yield('contents')
   

	<script src="{{ asset('assets/vendor/global/global.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
    @yield('script')	
	<script src="{{ asset('assets/vendor/bootstrap-datetimepicker/js/moment.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
	
	<script src="{{ asset('assets/js/custom.min.js') }}"></script>
	<script src="{{ asset('assets/js/dlabnav-init.js') }}"></script>

	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	
	<script>
		$(function () {
			$('#datetimepicker').datetimepicker({
				inline: true,
			});
		});
		
		$(document).ready(function(){
			$(".booking-calender .fa.fa-clock-o").removeClass(this);
			$(".booking-calender .fa.fa-clock-o").addClass('fa-clock');
		});
	</script>


</body>

</html>
