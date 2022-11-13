<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon.ico') }}">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap">

    <!-- Plugins CSS -->
    
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/vendor/font-awesome/css/all.min.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/vendor/tiny-slider/tiny-slider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.css') }}">

    <!-- Theme CSS -->
    <link id="stylesheet" rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/style.css') }}">
    
    

</head>

<body >

<!-- Header START -->
@include('frontEnd.header.header')
<!-- Header END -->

<!-- **************** MAIN CONTENT START **************** -->
@yield('content')
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->
@include('frontEnd.footer.footer')
<!-- =======================
Footer END -->

<!-- Sticky element START -->
<div class="alert alert-dismissible sticky-element fade show bg-dark text-white rounded-3 shadow p-4 ms-3 mb-3 col-10 col-md-4 col-lg-3 col-xl-2 d-none d-lg-block" role="alert">
	<div class="d-sm-flex align-items-center mb-3">
		<!-- Avatar -->
		<div>
			<div class="icon-lg bg-purple rounded-circle text-purple">
				<img class="p-3" src="assets/images/client/aftereffect.svg" alt="avatar">
			</div>
		</div>
		<!-- Info -->
		<div class="ms-sm-2 mt-2 mt-sm-0">
			<h6 class="mb-0 text-white">Adobe after effect motion</h6>
			<span class="small mb-0 me-3"><i class="far fa-clock text-danger me-2"></i>30 mins</span>
			<span class="small mb-0 me-1"><i class="fas fa-circle fw-bold text-success small me-2"></i>Live</span>
		</div>
	</div>
	<p class="mb-0 small">Its recommended that you complete this assignment to improve your design skills for graphics</p>

	<!-- Avatar group -->
	<div class="d-sm-flex justify-content-between mt-4">
		<ul class="avatar-group mb-2 mb-sm-0">
			<li class="avatar avatar-xs">
				<img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
			</li>
			<li class="avatar avatar-xs">
				<img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt="avatar">
			</li>
			<li class="avatar avatar-xs">
				<img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="avatar">
			</li>
			<li class="avatar avatar-xs">
				<img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg" alt="avatar">
			</li>
		</ul>

		<!-- Button -->
		<button type="button" class="btn btn-success btn-sm mb-0" data-bs-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">Join now</span>
		</button>
	</div>
	<!-- Close button -->
	<div class="position-absolute end-0 top-0 mt-n3 me-n3">
		<button type="button" class="btn btn-danger btn-round btn-sm mb-0" data-bs-dismiss="alert" aria-label="Close">
			<span aria-hidden="true"><i class="bi bi-x-lg"></i></span>
		</button>
	</div>
</div>
<!-- Sticky element START -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>



<!-- Bootstrap JS -->
<script src="{{ asset('frontend/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

<!-- Vendors -->
<script src="{{ asset('frontend/assets/vendor/tiny-slider/tiny-slider.js') }}"></script>
<script src="{{ asset('frontend/assets/vendor/glightbox/js/glightbox.js') }}"></script>

<!-- Template Functions -->
<script src="{{ asset('frontend/assets/js/functions.js') }}"></script>


</body>

</html>
