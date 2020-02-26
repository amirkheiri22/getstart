<!DOCTYPE html>
<html lang="fa">
<head>
    @yield('title')
    @include('layouts.meta')
    @include('layouts.style')
    @yield('links')
</head>
<body class="hold-transition sidebar-mini">
@yield('content')
@include('layouts.downScript')
@yield('scripts')
</body>
</html>
