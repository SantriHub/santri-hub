<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Eduport- LMS, Education and Course Theme">

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.ico">

	<!-- Google Font -->
    {{-- @include('includes.style') --}}
	 <!-- Google Font -->
	 <link rel="preconnect" href="https://fonts.googleapis.com">
	 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	 <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap">
	
	 <!-- Plugins CSS -->
	 <link rel="stylesheet" type="text/css" href="{{ secure_asset('template/assets/vendor/font-awesome/css/all.min.css')}}">
	 <link rel="stylesheet" type="text/css" href="{{ secure_asset('template/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}">
	 <link rel="stylesheet" type="text/css" href="{{ secure_asset('template/assets/vendor/tiny-slider/tiny-slider.css')}}">
	 <link rel="stylesheet" type="text/css" href="{{ secure_asset('template/assets/vendor/glightbox/css/glightbox.css')}}">
	 <link rel="stylesheet" type="text/css" href="{{ secure_asset('template/assets/vendor/apexcharts/css/apexcharts.css')}}">
	
	 <!-- Theme CSS -->
	 <link id="style-switch" rel="stylesheet" type="text/css" href="{{ secure_asset('template/assets/css/style.css')}}">

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
						<img src="/template/assets/images/element/02.svg" class="mt-5" alt="">
						<!-- Info -->
						<div class="d-sm-flex mt-5 align-items-center justify-content-center">
							<!-- Avatar group -->
							<ul class="avatar-group mb-2 mb-sm-0">
								<li class="avatar avatar-sm">
									<img class="avatar-img rounded-circle" src="template/assets/images/avatar/01.jpg" alt="avatar">
								</li>
								<li class="avatar avatar-sm">
									<img class="avatar-img rounded-circle" src="template/assets/images/avatar/02.jpg" alt="avatar">
								</li>
								<li class="avatar avatar-sm">
									<img class="avatar-img rounded-circle" src="template/assets/images/avatar/03.jpg" alt="avatar">
								</li>
								<li class="avatar avatar-sm">
									<img class="avatar-img rounded-circle" src="template/assets/images/avatar/04.jpg" alt="avatar">
								</li>
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
							<span class="mb-0 fs-1">👋</span>
							<h1 class="fs-2">Login Santri Hub </h1>
							@if (session()->has('loginError'))
							<div class="alert alert-danger d-flex align-items-center" role="alert">
								<div>
								 {{session('loginError')}}
								</div>
							  </div>
						@endif
							<!-- Form START -->
							<form action="/login" method="POST">
								@csrf
								<!-- Email -->
								<div class="mb-4">
									<label for="exampleInputEmail1" class="form-label">Email</label>
									<div class="input-group input-group-lg">
										<span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="bi bi-envelope-fill"></i></span>
										<input type="email" name="email" class="form-control border-0 bg-light rounded-end ps-1 @error('email') is-invalid @enderror" placeholder="E-mail" id="email" required>
										@error('email')
										<div class="invalid-feedback">
											{{$message}}
										  </div>
										@enderror
									</div>
								</div>
								<!-- Password -->
								<div class="mb-4">
									<label for="inputPassword5" class="form-label">Password</label>
									<div class="input-group input-group-lg">
										<span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="fas fa-lock"></i></span>
										<input type="password" name="password" class="form-control border-0 bg-light rounded-end ps-1 @error('password') is-invalid @enderror " placeholder="password" id="password" required>
										@error('password')
										<div class="invalid-feedback">
											{{$message}}
										  </div>
										@enderror
									</div>
								</div>
								<!-- Check box -->
								<div class="mb-4 d-flex justify-content-between mb-4" hidden>
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="exampleCheck1">
										<label class="form-check-label" for="exampleCheck1">Remember me</label>
									</div>
									<div class="text-primary-hover">
										<a href="forgot-password.html" class="text-secondary">
											<u>Forgot password?</u>
										</a>
									</div>
								</div>
								<!-- Button -->
								<div class="align-items-center mt-0">
									<div class="d-grid">
										<button class="btn btn-primary mb-0" type="submit">Login</button>
									</div>
								</div>
							</form>
							<!-- Form END -->

							<!-- Social buttons and divider -->
							<div class="row" hidden>
								<!-- Divider with text -->
								<div class="position-relative my-4">
									<hr>
									<p class="small position-absolute top-50 start-50 translate-middle bg-body px-5">Or</p>
								</div>

								<!-- Social btn -->
								<div class="col-xxl-6 d-grid">
									<a href="#" class="btn bg-google mb-2 mb-xxl-0"><i class="fab fa-fw fa-google text-white me-2"></i>Login with Google</a>
								</div>
								<!-- Social btn -->
								<div class="col-xxl-6 d-grid">
									<a href="#" class="btn bg-facebook mb-0"><i class="fab fa-fw fa-facebook-f me-2"></i>Login with Facebook</a>
								</div>
							</div>

							<!-- Sign up link -->
							<div class="mt-4 text-center">
								<span>Belum memiliki akun ? <a href=" {{url('register')}} ">Register Sekarang</a></span>
							</div>
						</div>
					</div> <!-- Row END -->
				</div>
			</div> <!-- Row END -->
		</div>
	</section>
</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Bootstrap JS -->
{{-- @include('includes.script') --}}
    <!-- Bootstrap JS -->
    <script src="{{ secure_asset('template/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Vendors -->
    <script src="{{ secure_asset('template/assets/vendor/tiny-slider/tiny-slider.js')}}"></script>
    <script src="{{ secure_asset('template/assets/vendor/glightbox/js/glightbox.js')}}"></script>
    <script src="{{ secure_asset('template/assets/vendor/purecounterjs/dist/purecounter_vanilla.js')}}"></script>
    <script src="{{ secure_asset('template/assets/vendor/apexcharts/js/apexcharts.min.js')}}"></script>
    <!-- Template Functions -->
    <script src="{{ secure_asset('template/assets/js/functions.js')}}"></script>
</body>
</html>