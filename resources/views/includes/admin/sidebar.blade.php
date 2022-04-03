<nav class="navbar sidebar navbar-expand-xl navbar-dark bg-dark">

	<!-- Navbar brand for xl START -->
	<div class="d-flex align-items-center">
		<a class="navbar-brand" href="/">
			<img class="navbar-brand-item" src="{{ asset('template/assets/images/logo-light.png')}}" alt="">
		</a>
	</div>
	<!-- Navbar brand for xl END -->
	
	<div class="offcanvas offcanvas-start flex-row custom-scrollbar h-100" data-bs-backdrop="true" tabindex="-1" id="offcanvasSidebar">
		<div class="offcanvas-body sidebar-content d-flex flex-column bg-dark">

			<!-- Sidebar menu START -->
			<ul class="navbar-nav flex-column" id="navbar-sidebar">
				
				<!-- Menu item 1 -->
				<li class="nav-item"><a href="{{route('dashboard')}}" class="nav-link"><i class="bi bi-house fa-fw me-2"></i>Dashboard</a></li>
				
				<!-- Title -->
				<li class="nav-item ms-2 my-2">Pages</li>
				<li class="nav-item">
					<a class="nav-link" data-bs-toggle="collapse" href="#collapsepageData" role="button" aria-expanded="false" aria-controls="collapsepageData">
						<i class="bi bi-menu-button-wide fa-fw me-2"></i>Master Data
					</a>
					<!-- Submenu -->
					<ul class="nav collapse flex-column" id="collapsepageData" data-bs-parent="#navbar-sidebar">
						<li class="nav-item"> <a class="nav-link" href="{{route('countries.index')}}">Country</a></li>
						<li class="nav-item"> <a class="nav-link" href="{{route('states.index')}}">State</a></li>
						<li class="nav-item"> <a class="nav-link" href="{{route('cities.index')}}">City</a></li>
						<li class="nav-item"> <a class="nav-link" href="{{route('colleges.index')}}">College</a></li>
					</ul>
				</li>
				<!-- menu item 2 -->
				<li class="nav-item">
					<a class="nav-link" href="{{route('mentors.index')}}" role="button" aria-expanded="false" aria-controls="collapseinstructors">
						<i class="fas fa-user-tie fa-fw me-2"></i>Mentor
					</a>					
				</li>

				<!-- Menu item 3 -->
				<li class="nav-item"> <a class="nav-link" href="admin-student-list.html"><i class="fas fa-user-graduate fa-fw me-2"></i>Member</a></li>

				<!-- Menu item 4 -->
				<li class="nav-item"> <a class="nav-link" href="admin-earning.html"><i class="far fa-chart-bar fa-fw me-2"></i>Transaction</a></li>
				<!-- Menu item 5 -->
				{{-- <li class="nav-item"> <a class="nav-link" href="admin-review.html"><i class="far fa-comment-dots fa-fw me-2"></i>Reviews</a></li> --}}

				<!-- Menu item 6 -->
				<li class="nav-item"> <a class="nav-link" href="admin-earning.html"><i class="far fa-chart-bar fa-fw me-2"></i>Earnings</a></li>

				<!-- Menu item 7 -->
				{{-- <li class="nav-item"> <a class="nav-link" href="admin-setting.html"><i class="fas fa-user-cog fa-fw me-2"></i>Admin Settings</a></li> --}}

				<!-- Title -->
				{{-- <li class="nav-item ms-2 my-2">Documentation</li> --}}

				<!-- Menu item 9 -->
				{{-- <li class="nav-item"> <a class="nav-link" href="docs/index.html"><i class="far fa-clipboard fa-fw me-2"></i>Documentation</a></li> --}}

				<!-- Menu item 10 -->
				{{-- <li class="nav-item"> <a class="nav-link" href="docs/changelog.html"><i class="fas fa-sitemap fa-fw me-2"></i>Changelog</a></li> --}}
			</ul>
			<!-- Sidebar menu end -->

			<!-- Sidebar footer START -->
			<div class="px-3 mt-auto pt-3">
				<div class="d-flex align-items-center justify-content-between text-primary-hover">
						<a class="h5 mb-0 text-body" href="admin-setting.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Settings">
							<i class="bi bi-gear-fill"></i>
						</a>
						<a class="h5 mb-0 text-body" href="{{url('/')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Home">
							<i class="bi bi-globe"></i>
						</a>
						<a class="h5 mb-0 text-body" href="{{url('logout')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Sign out">
							<i class="bi bi-power"></i>
						</a>
				</div>
			</div>
			<!-- Sidebar footer END -->
			
		</div>
	</div>
</nav>