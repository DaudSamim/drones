<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Video | USER PANEL</title>
    {{--CSS--}}
    @include('user.layout.partials.styles')
</head>
<body class="sidebar-dark">
<div class="main-wrapper">
    <!-- SIDEBAR -->
@include('user.layout.partials.sidebar')
<!-- SIDEBAR -->
    <div class="page-wrapper">
        <!-- NAV BAR -->
    @include('user.layout.partials.topnav')
    <!-- NAV BAR -->
        <div class="page-content">
            @yield('content')
        </div>
        <!-- FOOTER -->
    @include('user.layout.partials.footer')
    <!-- FOOTER -->
    </div>
</div>
{{--SCRIPTS--}}
@include('user.layout.partials.scripts')
</body>
</html>