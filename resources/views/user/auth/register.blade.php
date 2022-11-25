<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from eduport.webestica.com/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Oct 2022 14:36:51 GMT -->
<head>
	<title>Sign Up Page</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Eduport- LMS, Education and Course Theme">
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

<body>

<!-- **************** MAIN CONTENT START **************** -->
<main>
	<section class="p-0 d-flex align-items-center position-relative overflow-hidden">
	
		<div class="container-fluid">
			<div class="row">
				<!-- left -->
				<div class="col-12 col-lg-6 d-md-flex align-items-center justify-content-center bg-primary bg-opacity-10 vh-lg-100">
					<div class="p-3 p-lg-5">
						<!-- Title -->
						<div class="text-center">
							<h2 class="fw-bold">Welcome to our largest community</h2>
							<p class="mb-0 h6 fw-light">Let's learn something new today!</p>
						</div>
						<!-- SVG Image -->
						<img src="{{ asset('frontend/assets/images/element/02.svg') }}" class="mt-5" alt="">
						<!-- Info -->
						<div class="d-sm-flex mt-5 align-items-center justify-content-center">
							<ul class="avatar-group mb-2 mb-sm-0">
								
								<li class="avatar avatar-sm"><img class="avatar-img rounded-circle" src="{{ asset('frontend/assets/images/avatar/01.jpg') }}" alt="avatar"></li>
								<li class="avatar avatar-sm"><img class="avatar-img rounded-circle" src="{{ asset('frontend/assets/images/avatar/02.jpg') }}" alt="avatar"></li>
								<li class="avatar avatar-sm"><img class="avatar-img rounded-circle" src="{{ asset('frontend/assets/images/avatar/03.jpg') }}" alt="avatar"></li>
								<li class="avatar avatar-sm"><img class="avatar-img rounded-circle" src="{{ asset('frontend/assets/images/avatar/04.jpg') }}" alt="avatar"></li>
							</ul>
							<!-- Content -->
							<p class="mb-0 h6 fw-light ms-0 ms-sm-3">4k+ Students joined us, now it's your turn.</p>
						</div>
					</div>
				</div>

				<!-- Right -->
				<div class="col-12 col-lg-6 m-auto">
					<div class="row my-5">
						<div class="col-sm-10 col-xl-8 m-auto">
							<!-- Title -->
							<img src="{{ asset('frontend/assets/images/element/03.svg') }}" class="h-40px mb-2" alt="">
							<h2>Sign up for your account!</h2>
							<p class="lead mb-4">Nice to see you! Please Sign up with your account.</p>
							{{-- @if (session::has('error'))
							  <p clas="alert alert-danger">{{ session::get('error') }}</p>
								
							@endif --}}
							<!-- Form START -->
							<form action="{{ url('register') }}" method="post">
								@csrf
								<!-- name -->
								<div class="mb-4">
									<label for="name" class="form-label">Name *</label>
									<div class="input-group input-group-lg">
										<span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="bi bi-person-fill"></i></span>
										<input type="name" name="name" class="form-control border-0 bg-light rounded-end ps-1" placeholder="Name" id="name">
									</div>
									@if ($errors->has('name'))
									<p class="text-danger">{{ $errors->first('name') }}</p>
								@endif
								</div>
								<!-- Email -->
								<div class="mb-4">
									<label for="exampleInputEmail1" class="form-label">Email address *</label>
									<div class="input-group input-group-lg">
										<span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="bi bi-envelope-fill"></i></span>
										<input type="email" name="email" class="form-control border-0 bg-light rounded-end ps-1" placeholder="E-mail" id="exampleInputEmail1">
									</div>
									@if ($errors->has('email'))
									   <p class="text-danger">{{ $errors->first('email') }}</p>
									@endif
								</div>
								<!-- Password -->
								<div class="mb-4">
									<label for="inputPassword5" class="form-label">Password *</label>
									<div class="input-group input-group-lg">
										<span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="fas fa-lock"></i></span>
										<input type="password" name="password" class="form-control border-0 bg-light rounded-end ps-1" placeholder="*********" id="inputPassword5">
									</div>
									@if ($errors->has('password'))
									<p class="text-danger">{{ $errors->first('password') }}</p>
								 @endif
								</div>
								<!-- Confirm Password -->
								<div class="mb-4">
									<label for="inputPassword6" class="form-label">Confirm Password *</label>
									<div class="input-group input-group-lg">
										<span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="fas fa-lock"></i></span>
										<input type="password" name="password_confirmation" class="form-control border-0 bg-light rounded-end ps-1" placeholder="*********" id="inputPassword6">
									</div>
					
								</div>
								<!-- Check box -->
								<div class="mb-4">
									<div class="form-check">
										<input type="checkbox" name="agree" class="form-check-input" id="checkbox-1">
										<label class="form-check-label" for="checkbox-1">By signing up, you agree to the<a href="#"> terms of service</a></label>
									</div>
								</div>
								<!-- Button -->
								<div class="align-items-center mt-0">
									<div class="d-grid">
										<button class="btn btn-primary mb-0" type="submit">Sign Up</button>
									</div>
								</div>
							</form>
							<!-- Form END -->

							<!-- Social buttons -->
							<div class="row">
								<!-- Divider with text -->
								<div class="position-relative my-4">
									<hr>
									<p class="small position-absolute top-50 start-50 translate-middle bg-body px-5">Or</p>
								</div>
								<!-- Social btn -->
								<div class="col-xxl-6 d-grid">
									<a href="#" class="btn bg-google mb-2 mb-xxl-0"><i class="fab fa-fw fa-google text-white me-2"></i>Signup with Google</a>
								</div>
								<!-- Social btn -->
								<div class="col-xxl-6 d-grid">
									<a href="#" class="btn bg-facebook mb-0"><i class="fab fa-fw fa-facebook-f me-2"></i>Signup with Facebook</a>
								</div>
							</div>

							<!-- Sign up link -->
							<div class="mt-4 text-center">
								<span>Already have an account?<a href="{{ route('login') }}"> Sign in here</a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

<!-- Bootstrap JS -->
<script src="{{ asset('frontend/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

<!-- Template Functions -->
<script src="{{ asset('frontend/assets/js/functions.js') }}"></script>

</body>

<!-- Mirrored from eduport.webestica.com/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Oct 2022 14:36:52 GMT -->
</html>