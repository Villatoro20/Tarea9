<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminLTE Integration</title>
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        @include('partials.navbar')
        <!-- Sidebar -->
        @include('partials.sidebar')
        <!-- Content Wrapper -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- Footer -->
        @include('partials.footer')
    </div>
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
</body>
</html>

@extends('layouts.adminlte')

@section('content')
    <h1>Welcome to Home</h1>
    <p>This is the home page.</p>
@endsection
