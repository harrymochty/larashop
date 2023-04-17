<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('adminn/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>
        {{ config('app.name') }} | @yield('title')</title>
</head>

<body>

    <!-- SIDEBAR -->
    @include('layouts/sidebar')
    <!-- SIDEBAR -->

    <!-- NAVBAR -->
    <section id="content">
        <!-- NAVBAR -->
        @include('layouts/navbar')
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <h1 class="title">@yield('title')</h1>
            <ul class="breadcrumbs">
                @section('breadcrumbs')
                    <li><a href="#">Home</a></li>
                    <li class="divider">/</li>
                @show
            </ul>
            </div>
            <!-- MAIN -->
            @yield('content')
            <!-- MAIN -->
        </main>
        <!-- MAIN -->
    </section>
    <!-- NAVBAR -->

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{ asset('adminn/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
