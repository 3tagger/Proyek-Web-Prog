<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.backend.head')
    @yield('additional-includes')
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Proyek Web Programming') }}</title>

    <!-- Scripts, CSRF protection -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <!-- Navigation Bar -->
    @include('includes.backend.navigation')

    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    @include('includes.backend.footer')

    <!-- Scripts -->
    @include('includes.backend.script')

    <!-- Additional script -->
    @yield('additional-script')
</body>
</html>
