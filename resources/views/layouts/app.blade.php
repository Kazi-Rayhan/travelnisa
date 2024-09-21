<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('assets/frontend') }}/img/favicon.png" />
    @include('layouts.partials.style')
</head>

<body>
    <!-- Preloader -->
    @include('layouts.partials.preloader')
    <!-- Progress scroll totop -->
    @include('layouts.partials.progress_scroll_to_top')
    <!-- Navbar -->
    @include('layouts.partials.navbar')
    <!-- Main Content -->
    @yield('content')
    <!-- Footer -->
    @include('layouts.partials.footer')
    <!-- jQuery -->
    @include('layouts.partials.script')
    @include('layouts.partials.showToast')
</body>

</html>
