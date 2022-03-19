@extends('layouts.app')
@section('title')
    Santri Hub | List Mentor
@endsection

@section('content')
<!-- =======================
Page content START -->
<section class="pt-3 pt-xl-5">
	<div class="container" data-sticky-container>
		<div class="row g-4">
			<!-- Main content START -->
			<div class="col-xl-8">

				<div class="row g-4">
					<!-- Title START -->
					<div class="col-12">
						<!-- Title -->
						<h2>Chat Bersama Ahmad Fulan</h2>
						<p>Satisfied conveying a dependent contented he gentleman agreeable do be. Warrant private blushes removed an in equally totally if. Delivered dejection necessary objection do Mr prevailed. Mr feeling does chiefly cordial in do.</p>
						<!-- Content -->
						{{-- <ul class="list-inline mb-0">
							<li class="list-inline-item fw-light h6 me-3 mb-1 mb-sm-0"><i class="fas fa-star me-2"></i>4.5/5.0</li>
							<li class="list-inline-item fw-light h6 me-3 mb-1 mb-sm-0"><i class="fas fa-user-graduate me-2"></i>12k Enrolled</li>
							<li class="list-inline-item fw-light h6 me-3 mb-1 mb-sm-0"><i class="fas fa-signal me-2"></i>All levels</li>
							<li class="list-inline-item fw-light h6 me-3 mb-1 mb-sm-0"><i class="bi bi-patch-exclamation-fill me-2"></i>Last updated 09/2021</li>
							<li class="list-inline-item fw-light h6"><i class="fas fa-globe me-2"></i>English</li>
						</ul> --}}
					</div>
					<!-- Title END -->

					<!-- Image and video -->
					<div class="col-12 position-relative">
						<div class="video-player rounded-3">
							<video controls crossorigin="anonymous" playsinline poster="assets/images/videos/poster.jpg">
								<source src="{{ url('template/assets/images/videos/360p.mp4')}}" type="video/mp4" size="360">
								<source src="{{ url('template/assets/images/videos/720p.mp4')}}" type="video/mp4" size="720">
								<source src="{{ url('template/assets/images/videos/1080p.mp4')}}" type="video/mp4" size="1080">
								<!-- Caption files -->
								<track kind="captions" label="English" srclang="en" src="assets/images/videos/en.vtt" default>
								<track kind="captions" label="French" srclang="fr" src="assets/images/videos/fr.vtt">
							</video>
						</div>
					</div>
				</div>
      </div>
			<!-- Main content END -->

			<!-- Right sidebar START -->
			<div class="col-xl-4">
				<div data-sticky data-margin-top="80" data-sticky-for="768">
					<div class="row g-4">
						<div class="col-md-6 col-xl-12">
							<!-- Course info START -->
							<div class="card card-body border p-4">
								<!-- Price and share button -->
								<div class="d-flex justify-content-between align-items-center">
									<!-- Price -->
									<h3 class="fw-bold mb-0 me-2">Gratis</h3>
									<!-- Share button with dropdown -->
									<div class="dropdown">
										<a href="#" class="btn btn-sm btn-light rounded mb-0 small" role="button" id="dropdownShare" data-bs-toggle="dropdown" aria-expanded="false">
											<i class="fas fa-fw fa-share-alt"></i>
										</a>
										<!-- dropdown button -->
										<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare">
											<li><a  class="dropdown-item" href="#"><i class="fab fa-twitter-square me-2"></i>Twitter</a></li>
											<li><a class="dropdown-item" href="#"><i class="fab fa-facebook-square me-2"></i>Facebook</a></li>
											<li><a class="dropdown-item" href="#"><i class="fab fa-linkedin me-2"></i>LinkedIn</a></li>
											<li><a class="dropdown-item" href="#"><i class="fas fa-copy me-2"></i>Copy link</a></li>
										</ul>
									</div>
								</div>
									
								<!-- Buttons -->
								<div class="mt-3 d-grid">
									<a href="#" class="btn btn-outline-primary">Tambah Keranjang</a>
									<a href="#" class="btn btn-success">Beli Sekarang</a>
								</div>
								<!-- Divider -->
								<hr>

								<!-- Title -->
								<h5 class="mb-3">Peraturan Chat</h5>
								<ul class="list-group list-group-borderless border-0">
									<li class="list-group-item px-0 d-flex justify-content-between">
										<span class="h6 fw-light mb-0"><i class="fas fa-fw fa-book-open text-primary"></i>Dilarang berbicara SARA</span>
										{{-- <span>30</span> --}}
									</li>
									{{-- <li class="list-group-item px-0 d-flex justify-content-between">
										<span class="h6 fw-light mb-0"><i class="fas fa-fw fa-clock text-primary"></i>Duration</span>
										<span>4h 50m</span>
									</li>
									<li class="list-group-item px-0 d-flex justify-content-between">
										<span class="h6 fw-light mb-0"><i class="fas fa-fw fa-signal text-primary"></i>Skills</span>
										<span>Beginner</span>
									</li>
									<li class="list-group-item px-0 d-flex justify-content-between">
										<span class="h6 fw-light mb-0"><i class="fas fa-fw fa-globe text-primary"></i>Language</span>
										<span>English</span>
									</li>
									<li class="list-group-item px-0 d-flex justify-content-between">
										<span class="h6 fw-light mb-0"><i class="fas fa-fw fa-user-clock text-primary"></i>Deadline</span>
										<span>Nov 30 2021</span>
									</li>
									<li class="list-group-item px-0 d-flex justify-content-between">
										<span class="h6 fw-light mb-0"><i class="fas fa-fw fa-medal text-primary"></i>Certificate</span>
										<span>Yes</span>
									</li> --}}
								</ul>
								<!-- Divider -->
								<hr>

								<!-- Instructor info -->
								<div class="d-sm-flex align-items-center">
									<!-- Avatar image -->
									<div class="avatar avatar-xl">
										<img class="avatar-img rounded-circle" src="{{ url('template/assets/images/avatar/05.jpg')}}" alt="avatar">
									</div>
									<div class="ms-sm-3 mt-2 mt-sm-0">
										<h5 class="mb-0"><a href="#">Ahmad Fulan</a></h5>
										<p class="mb-0 small">Teknik Informatika</p>
									</div>
								</div>
							</div>
							<!-- Course info END -->
						</div>
					</div><!-- Row End -->
				</div>	
			</div>
			<!-- Right sidebar END -->

		</div><!-- Row END -->
	</div>
</section>
<!-- =======================
Page content END -->
@endsection