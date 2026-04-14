<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sirkunomi</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('build/assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/css/home.css') }}">

    <link rel="icon" type="image/png" href="{{ asset('build/assets/images/logo.svg') }}">

    <!-- Custom Style -->
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            background-color: #F2EDC2;
            font-family: 'Segoe UI', sans-serif;
        }

        /* Glass Effect */
        .glass {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(12px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .btn-green {
            background-color: #346739;
            color: white;
            border-radius: 12px;
        }

        .btn-green:hover {
            background-color: #2c5a30;
            color: white;
        }

        .section {
            padding: 80px 0;
        }
    </style>
</head>

<body>

    @include('components.navbar')

    @yield('content')

    @include('components.footer')

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>
        AOS.init({
            duration: 1000, // durasi animasi
            once: true // animasi hanya sekali
        });
    </script>

</body>

</html>