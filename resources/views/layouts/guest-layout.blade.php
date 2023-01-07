<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '340530300820909');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=340530300820909&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-10FF3S0PMQ"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-10FF3S0PMQ');
    </script>
    <!-- End Google Analytics -->


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jonathan Velazquez - Diseño de Páginas Web en Tijuana B.C.</title>

    <!-- Necesitamos los meta description y meta keywords para SEO. -->
    <meta name="description" content="Diseño de páginas web en Tijuana B.C.">
    <meta name="keywords" content="Páginas Web, Diseño de Páginas Web, Páginas Web en Tijuana, Páginas Web en Baja California, Páginas Web en México, Páginas Web en Tijuana B.C., Sitios Web, Diseño de Sitios Web, Aplicaciones, Apps, Tijuana, Jonathan Velazquez, Jonathan V, Jonathan V.">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- OWL Carousel -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

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