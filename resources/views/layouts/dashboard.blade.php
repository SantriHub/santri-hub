<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>

    @stack('prepend-style')
    @include('includes.dashboard.style')
    @stack('addon-style')

</head>

<body>
    @include('includes.dashboard.navbar')
    <main>
        @yield('content')
    </main>
    @include('includes.dashboard.footer')

    @stack('prepend-script')
    <!-- Back to top -->
    <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>
    @include('includes.dashboard.script')
    @stack('addon-script')
</body>

</html>