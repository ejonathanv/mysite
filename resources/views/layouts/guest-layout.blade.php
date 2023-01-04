<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jonathan Velazquez - Diseño de Páginas Web en Tijuana B.C.</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- OWL Carousel -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/133291f590.js" crossorigin="anonymous"></script>

    <!-- ReCaptcha -->
    {!! htmlScriptTagJsApi() !!}

</head>

<body>
    <!-- header -->
    <x-site-header />

    <!-- main -->
    <main class="main__content">
        {{ $slot }}
    </main>

    <!-- footer -->
    <x-site-footer />

    <!-- scripts -->
    <!-- We need the latest jquery version -->
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <!-- We need the wow js library -->
    <script src="{{ asset('js/wow.js') }}"></script>
    <!-- We need the OWL Carousel js library -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- This is the main js -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>