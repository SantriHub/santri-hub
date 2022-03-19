@extends('layouts.app')
@section('title')
    Santri Hub | List Mentor
@endsection

@section('content')
{{-- Page Banner START --> --}}
<section class="bg-blue align-items-center d-flex" style="background:url({{ url('template/assets/images/pattern/04.png')}}) no-repeat center center; background-size:cover;">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<!-- Title -->
				<h1 class="text-white">Chat Bersama Mentor ITB</h1>
				<!-- Breadcrumb -->
				<div class="d-flex justify-content-center">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb breadcrumb-dark breadcrumb-dots mb-0">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">List Mentor ITB</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Page Banner END -->

<!-- =======================
Page content START -->
<section class="py-5">
<div class="container">
	<div class="row">
		<!-- Main content START -->
		<div class="col-lg-8 col-xl-9">

			<!-- Search option START -->
			<div class="row mb-4 align-items-center">
				<!-- Search bar -->
				<div class="col-xl-6">
					<form class="border rounded p-2">
						<div class="input-group input-borderless">
							<input class="form-control me-1" type="search" placeholder="Find your course">
							<button type="button" class="btn btn-primary mb-0 rounded z-index-1"><i class="fas fa-search"></i></button>
						</div>
					</form>
				</div>

				<!-- Select option -->
				<div class="col-xl-3 mt-3 mt-xl-0">
					<form class="border rounded p-2 input-borderless">
						<select class="form-select form-select-sm js-choice border-0" aria-label=".form-select-sm">
							<option value="">Most Viewed</option>
							<option>Recently search</option>
							<option>Most popular</option>
							<option>Top rated</option>
						</select>
					</form>
				</div>

				<!-- Content -->
				<div class="col-12 col-xl-3 d-flex justify-content-between align-items-center mt-3 mt-xl-0">
					<!-- Advanced filter responsive toggler START -->
					<button class="btn btn-primary mb-0 d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
						<i class="fas fa-sliders-h me-1"></i> Show filter
					</button>
					<!-- Advanced filter responsive toggler END -->
					<p class="mb-0 text-end">Showing 1-7 of 32 result</p>
				</div>

			</div>
			<!-- Search option END -->

			<!-- Course Grid START -->
			<div class="row g-4">

				<!-- Card item START -->
				<div class="col-sm-6 col-xl-4">
					<div class="card shadow h-100">
						<!-- Image -->
						<img src="{{ url('template/assets/images/courses/4by3/08.jpg')}}" class="card-img-top" alt="course image">
						<!-- Card body -->
						<div class="card-body pb-0">
							<!-- Badge and favorite -->
							<div class="d-flex justify-content-between mb-2">
								{{-- <a href="#" class="badge bg-purple bg-opacity-10 text-purple">All level</a>
								<a href="#" class="h6 fw-light mb-0"><i class="far fa-heart"></i></a> --}}
							</div>
							<!-- Title -->
							<h5 class="card-title"><a href="/kampus/itb/ahmad-fulan">Ahmad Fulan</a></h5>
							<p class="mb-2 text-truncate-2">Proposal indulged no do sociable he throwing settling.</p>
							<!-- Rating star -->
							<ul class="list-inline mb-0">
								<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
								<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
								<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
								<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
								<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
								<li class="list-inline-item ms-2 h6 fw-light mb-0">4.0/5.0</li>
							</ul>
						</div>
						<!-- Card footer -->
						<div class="card-footer pt-0 pb-3">
							<hr>
							<div class="d-flex justify-content-between">
								<span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>Informatika</span>
								<span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>Beasiswa</span>
							</div>
						</div>
					</div>
				</div>
				<!-- Card item END -->

				<!-- Card item START -->
				<div class="col-sm-6 col-xl-4">
					<div class="card shadow h-100">
						<!-- Image -->
						<img src="{{ url('template/assets/images/courses/4by3/02.jpg')}}" class="card-img-top" alt="course image">
						<div class="card-body pb-0">
							<!-- Badge and favorite -->
							<div class="d-flex justify-content-between mb-2">
								{{-- <a href="#" class="badge bg-success bg-opacity-10 text-success">Beginner</a>
								<a href="#" class="text-danger"><i class="fas fa-heart"></i></a> --}}
							</div>
							<!-- Title -->
							<h5 class="card-title"><a href="#">Siti Maimunah</a></h5>
							<p class="mb-2 text-truncate-2">Rooms oh fully taken by worse do Points afraid but may end Rooms Points afraid but may end Rooms</p>
							<!-- Rating star -->
							<ul class="list-inline mb-0">
								<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
								<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
								<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
								<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
								<li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
								<li class="list-inline-item ms-2 h6 fw-light mb-0">4.5/5.0</li>
							</ul>
						</div>
						<!-- Card footer -->
						<div class="card-footer pt-0 pb-3">
							<hr>
							<div class="d-flex justify-content-between">
								<span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>Teknik Kimia</span>
								<span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>SBMPTN</span>
							</div>
						</div>
					</div>
				</div>
				<!-- Card item END -->

				<!-- Card item START -->
				<div class="col-sm-6 col-xl-4">
					<div class="card shadow h-100">
						<!-- Image -->
						<img src="{{ url('template/assets/images/courses/4by3/03.jpg')}}" class="card-img-top" alt="course image">
						<div class="card-body pb-0">
							<!-- Badge and favorite -->
							<div class="d-flex justify-content-between mb-2">
								{{-- <a href="#" class="badge bg-success bg-opacity-10 text-success">Beginner</a>
								<a href="#" class="h6 fw-light mb-0"><i class="far fa-heart"></i></a> --}}
							</div>
							<!-- Title -->
							<h5 class="card-title"><a href="#">Maulana Rumi</a></h5>
							<p class="mb-2 text-truncate-2">Rooms oh fully taken by worse do. Points afraid but may end afraid but may end.</p>
							<!-- Rating star -->
							<ul class="list-inline mb-0">
								<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
								<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
								<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
								<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
								<li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
								<li class="list-inline-item ms-2 h6 fw-light mb-0">4.5/5.0</li>
							</ul>
						</div>
						<!-- Card footer -->
						<div class="card-footer pt-0 pb-3">
							<hr>
							<div class="d-flex justify-content-between">
								<span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>Teknik Industri</span>
								<span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>Beasiswa</span>
							</div>
						</div>
					</div>
				</div>
				<!-- Card item END -->
			</div>
			<!-- Course Grid END -->

			<!-- Pagination START -->
			<div class="col-12">
				<nav class="mt-4 d-flex justify-content-center" aria-label="navigation">
					<ul class="pagination pagination-primary-soft rounded mb-0">
						<li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-double-left"></i></a></li>
						<li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
						<li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
						<li class="page-item mb-0"><a class="page-link" href="#">..</a></li>
						<li class="page-item mb-0"><a class="page-link" href="#">6</a></li>
						<li class="page-item mb-0"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
					</ul>
				</nav>
			</div>
			<!-- Pagination END -->
		</div>
		<!-- Main content END -->

		<!-- Right sidebar START -->
		<div class="col-lg-4 col-xl-3 pt-5 pt-lg-0">
			<!-- Responsive offcanvas body START -->
			<nav class="navbar navbar-light navbar-expand-lg mx-0">
				<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
					<div class="offcanvas-header bg-light">
						<h5 class="offcanvas-title" id="offcanvasNavbarLabel">Advance Filter</h5>
						<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
					</div>
					<div class="offcanvas-body p-3 p-lg-0">
						<form>
								<!-- Category START -->
								<div class="card card-body shadow p-4 mb-4">
									<!-- Title -->
									<h4 class="mb-3">Kategori</h4>
									<!-- Category group -->
									<div class="col-12">
										<!-- Checkbox -->
										<div class="d-flex justify-content-between align-items-center">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault9">
												<label class="form-check-label" for="flexCheckDefault9">All</label>
											</div>
											<span class="small">(1256)</span>
										</div>
										<!-- Checkbox -->
										<div class="d-flex justify-content-between align-items-center">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault10">
												<label class="form-check-label" for="flexCheckDefault10">Development</label>
											</div>
											<span class="small">(365)</span>
										</div>
										<!-- Checkbox -->
										<div class="d-flex justify-content-between align-items-center">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault11">
												<label class="form-check-label" for="flexCheckDefault11">Design</label>
											</div>
											<span class="small">(156)</span>
										</div>
										<!-- Checkbox -->
										<div class="d-flex justify-content-between align-items-center">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault12">
												<label class="form-check-label" for="flexCheckDefault12">Accounting</label>
											</div>
											<span class="small">(65)</span>
										</div>
										<!-- Checkbox -->
										<div class="d-flex justify-content-between align-items-center">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault17">
												<label class="form-check-label" for="flexCheckDefault17">Translation</label>
											</div>
											<span class="small">(245)</span>
										</div>
										<!-- Checkbox -->
										<div class="d-flex justify-content-between align-items-center">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault13">
												<label class="form-check-label" for="flexCheckDefault13">Finance</label>
											</div>
											<span class="small">(184)</span>
										</div>
										<!-- Checkbox -->
										<div class="d-flex justify-content-between align-items-center">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault14">
												<label class="form-check-label" for="flexCheckDefault14">Legal</label>
											</div>
											<span class="small">(65)</span>
										</div>
										<!-- Checkbox -->
										<div class="d-flex justify-content-between align-items-center">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault15">
												<label class="form-check-label" for="flexCheckDefault15">Photography</label>
											</div>
											<span class="small">(99)</span>
										</div>
										
										<!-- Collapse body -->
										<div class="collapse multi-collapse" id="multiCollapseExample1">
											<div class="card card-body p-0">
												<!-- Checkbox -->
												<div class="d-flex justify-content-between align-items-center">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault16">
														<label class="form-check-label" for="flexCheckDefault16">Writing</label>
													</div>
													<span class="small">(178)</span>
												</div>
												<!-- Checkbox -->
												<div class="d-flex justify-content-between align-items-center">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault18">
														<label class="form-check-label" for="flexCheckDefault18">Marketing</label>
													</div>
													<span class="small">(104)</span>
												</div>
											</div>
										</div>
										<!-- Collapse button -->
										<a class=" p-0 mb-0 mt-2 btn-more d-flex align-items-center" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
											See <span class="see-more ms-1">more</span><span class="see-less ms-1">less</span><i class="fas fa-angle-down ms-2"></i>
										</a>
									</div>
								</div>
								<!-- Category END -->
		
								<!-- Price START -->
								<div class="card card-body shadow p-4 mb-4">
									<!-- Title -->
									<h4 class="mb-3">Price Level</h4>
									<ul class="list-inline mb-0">
										<!-- Rent -->
										<li class="list-inline-item">
											<input type="radio" class="btn-check" name="options" id="option1">
											<label class="btn btn-light btn-primary-soft-check" for="option1">All</label>
										</li>
										<!-- Sale -->
										<li class="list-inline-item">
											<input type="radio" class="btn-check" name="options" id="option2">
											<label class="btn btn-light btn-primary-soft-check" for="option2">Free</label>
										</li>
										<!-- Buy -->
										<li class="list-inline-item">
											<input type="radio" class="btn-check" name="options" id="option3">
											<label class="btn btn-light btn-primary-soft-check" for="option3">Paid</label>
										</li>
									</ul>
								</div>
								<!-- Price END -->
		
								<!-- Skill level START -->
								<div class="card card-body shadow p-4 mb-4">
									<!-- Title -->
									<h4 class="mb-3">Skill level</h4>
									<ul class="list-inline mb-0">
										<!-- Item -->
										<li class="list-inline-item mb-2">
											<input type="checkbox" class="btn-check" id="btn-check-12">
											<label class="btn btn-light btn-primary-soft-check" for="btn-check-12">All levels</label>
										</li>
										<!-- Item -->
										<li class="list-inline-item mb-2">
											<input type="checkbox" class="btn-check" id="btn-check-9">
											<label class="btn btn-light btn-primary-soft-check" for="btn-check-9">Beginner</label>
										</li>
										<!-- Item -->
										<li class="list-inline-item mb-2">
											<input type="checkbox" class="btn-check" id="btn-check-10">
											<label class="btn btn-light btn-primary-soft-check" for="btn-check-10">Intermediate</label>
										</li>
										<!-- Item -->
										<li class="list-inline-item mb-2">
											<input type="checkbox" class="btn-check" id="btn-check-11">
											<label class="btn btn-light btn-primary-soft-check" for="btn-check-11">Advanced</label>
										</li>
									</ul>
								</div>
								<!-- Skill level END -->
		
								<!-- Language START -->
								<div class="card card-body shadow p-4 mb-4">
									<!-- Title -->
									<h4 class="mb-3">Language</h4>
									<ul class="list-inline mb-0 g-3">
										<!-- Item -->
										<li class="list-inline-item mb-2">
											<input type="checkbox" class="btn-check" id="btn-check-2">
											<label class="btn btn-light btn-primary-soft-check" for="btn-check-2">English</label>
										</li>
										<!-- Item -->
										<li class="list-inline-item mb-2">
											<input type="checkbox" class="btn-check" id="btn-check-3">
											<label class="btn btn-light btn-primary-soft-check" for="btn-check-3">Francas</label>
										</li>
										<!-- Item -->
										<li class="list-inline-item mb-2">
											<input type="checkbox" class="btn-check" id="btn-check-4">
											<label class="btn btn-light btn-primary-soft-check" for="btn-check-4">Hindi</label>
										</li>
										<!-- Item -->
										<li class="list-inline-item mb-2">
											<input type="checkbox" class="btn-check" id="btn-check-5">
											<label class="btn btn-light btn-primary-soft-check" for="btn-check-5">Russian</label>
										</li>
										<!-- Item -->
										<li class="list-inline-item mb-2">
											<input type="checkbox" class="btn-check" id="btn-check-6">
											<label class="btn btn-light btn-primary-soft-check" for="btn-check-6">Spanish</label>
										</li>
										<!-- Item -->
										<li class="list-inline-item mb-2">
											<input type="checkbox" class="btn-check" id="btn-check-7">
											<label class="btn btn-light btn-primary-soft-check" for="btn-check-7">Bengali</label>
										</li>
										<!-- Item -->
										<li class="list-inline-item mb-2">
											<input type="checkbox" class="btn-check" id="btn-check-8">
											<label class="btn btn-light btn-primary-soft-check" for="btn-check-8">Portuguese</label>
										</li>
									</ul>
								</div>
								<!-- Language END -->
						</form><!-- Form End -->
					</div>

					<!-- Button -->
					<div class="d-grid p-2 p-lg-0 text-center">
						<button class="btn btn-primary mb-0">Filter Results</button>
					</div>

				</div>
			</nav>
			<!-- Responsive offcanvas body END -->
		</div>
		<!-- Right sidebar END -->
	</div><!-- Row END -->
</div>
</section>
<!-- =======================
Page content END -->
@endsection