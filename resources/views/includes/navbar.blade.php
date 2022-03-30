    <header class="navbar-light navbar-sticky header-static">
        <!-- Logo Nav START -->
        <nav class="navbar navbar-expand-xl">
            <div class="container-fluid px-3 px-xl-5">
                <!-- Logo START -->
                <a class="navbar-brand" href="index.html">
                    <img class="light-mode-item navbar-brand-item" src="{{ url('template/assets/images/logo.svg')}}" alt="logo">
                    <img class="dark-mode-item navbar-brand-item" src="{{ url('template/assets/images/logo-light.svg')}}" alt="logo">
                </a>
                <!-- Logo END -->

                <!-- Responsive navbar toggler -->
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-animation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

                <!-- Main navbar START -->
                <div class="navbar-collapse  w-100 collapse" id="navbarCollapse">

                    <!-- Nav category menu START -->
                    <ul class="navbar-nav navbar-nav-scroll me-auto">
                        <!-- Nav item 1 Demos -->
                        <li class="nav-item dropdown dropdown-menu-shadow-stacked">
                            <a class="nav-link bg-primary bg-opacity-10 rounded-3 text-primary px-3 py-3 py-xl-0" href="/" id="categoryMenu" aria-haspopup="true" aria-expanded="false"><i class="bi bi-ui-radios-grid me-2"></i><span>Home</span></a>
                        </li>
                    </ul>
                    <!-- Nav category menu END -->

                    <!-- Nav Main menu START -->
                    <ul class="navbar-nav navbar-nav-scroll me-auto">                    

                        <!-- Nav item 2 Pages -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Layanan Santri Hub</a>
                            <ul class="dropdown-menu" aria-labelledby="pagesMenu">
                                <li> <a class="dropdown-item" href="instructor-list.html">Chat Mentor</a></li>
                                <li> <a class="dropdown-item" href="instructor-single.html">Try Out</a></li>
                                <li> <a class="dropdown-item" href="become-instructor.html">Webinar</a></li>
                                <li> <a class="dropdown-item" href="become-instructor.html">E-Course</a></li>
                                <li> <a class="dropdown-item" href="faq.html">Beasiswa</a></li>
                            </ul>
                        </li>

                        <!-- Nav item 3 Account -->
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="accounntMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kalender Masuk Perguruan Tinggi </a>
                        </li>

                        <!-- Nav item 4 Megamenu-->
                        <li class="nav-item dropdown dropdown-fullwidth">
                            <a class="nav-link" href="#"  aria-expanded="false">Try Out</a>
                        </li>

                        <!-- Nav item 5 link-->
                        <li class="nav-item dropdown dropdown-fullwidth">
                            <a class="nav-link" href="#"  aria-expanded="false">Blog</a>
                        </li>
                        @if (!Auth::user())
                        <li class="nav-item dropdown  dropdown-menu-shadow-stacked" style="margin-left: 5px">
                            <a class="nav-link border border-primary rounded text-black px-3 py-3 py-xl-0" href="/login"><span>Login</span></a>
                        </li>
                        <li class="nav-item dropdown dropdown-menu-shadow-stacked " style="margin-left: 5px">
                            <a class="nav-link bg-primary bg-opacity-9 rounded-3 text-white px-3 py-3 py-xl-0" href="/register" id="categoryMenu" aria-haspopup="true" aria-expanded="false"><span>Register</span></a>
                        </li>
                        @endif
                    </li>

                    </ul>
                    <!-- Nav Main menu END -->

                </div>
                <!-- Main navbar END -->

                <!-- Profile START -->
               @auth
              
               <div class="dropdown ms-1 ms-lg-0">
                <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                    <img class="avatar-img rounded-circle" src="{{ url('template/assets/images/avatar/01.jpg')}}" alt="avatar">
                </a>
                <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
                    <!-- Profile info -->
                   
                    <li class="px-3">
                        <div class="d-flex align-items-center">
                            <!-- Avatar -->
                            <div class="avatar me-3">
                                <img class="avatar-img rounded-circle shadow" src="{{ url('template/assets/images/avatar/01.jpg')}}" alt="avatar">
                            </div>
                            <div>
                                <a class="h6" href="#">Lori Ferguson</a>
                                <p class="small m-0">example@gmail.com</p>
                            </div>
                        </div>
                        <hr>
                    </li>
                    <!-- Links -->
                    @if (Auth::user()->roles === 'Student')
                        <li><a class="dropdown-item" href="/dashboard/member"><i class="bi bi-border-all fa-fw me-2"></i>Dashboard</a></li>
                    @elseif (Auth::user()->roles === 'Mentor')
                        <li><a class="dropdown-item" href="/dashboard/mentor"><i class="bi bi-border-all fa-fw me-2"></i>Dashboard</a></li>
                    @else
                        <li><a class="dropdown-item" href="/dashboard/admin"><i class="bi bi-border-all fa-fw me-2"></i>Dashboard</a></li>
                    @endif
                    <li><a class="dropdown-item" href="#"><i class="bi bi-person fa-fw me-2"></i>Edit Profil</a></li>
                    <li><a class="dropdown-item bg-danger-soft-hover" href="{{ url('/logout') }}"><i class="bi bi-power fa-fw me-2"></i>Keluar</a></li>
                    
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <!-- Dark mode switch START -->
                    <!-- Dark mode switch END -->
                </ul>
            </div>
               @endauth
                <!-- Profile START -->
            </div>
        </nav>
        <!-- Logo Nav END -->
    </header>