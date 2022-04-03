<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <title>@yield('title')</title>

    @stack('prepend-style')
    @include('includes.admin.style')
    @stack('addon-style')

</head>

<body>
    <main>
        @include('includes.admin.sidebar')
        <div class="page-content">
        @include('includes.admin.navbar')
        @yield('content')
        </div>
    </main>
    @stack('prepend-script')
    <!-- Back to top -->
    <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>
    @include('includes.admin.script')
    @yield('script')
    @stack('addon-script')
</body>

</html>