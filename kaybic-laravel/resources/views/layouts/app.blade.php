<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <title>@yield('title', 'KAYBIC AFRICA | Agrégateur de paiement mobile pour l\'Afrique de l\'Ouest')</title>
    <meta name="keywords" content="@yield('keywords', 'Mobile Money, API paiement, Orange Money, MTN Mobile Money, Moov Money, Wave, CEDEAO')" />
    <meta name="description" content="@yield('description', 'Plateforme d\'agrégation Mobile Money leader en Afrique de l\'Ouest. Une API unifiée pour tous les opérateurs Mobile Money.')">
    <meta name="author" content="KAYBIC AFRICA">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="48x48" href="{{ asset('img/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="64x64" href="{{ asset('img/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="128x128" href="{{ asset('img/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('img/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="256x256" href="{{ asset('img/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('img/favicon.png') }}">

    <!-- Web Fonts -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.compat.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme-elements.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/skin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <!-- Custom Styles -->
    @stack('styles')

    <!-- Style personnalisé pour le loader -->
    <style>
        .cssload-logo-center {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10;
        }
        
        .cssload-logo-center img {
            width: 50px;
            height: auto;
            opacity: 0.9;
            animation: logoFade 2s ease-in-out infinite alternate;
        }
        
        @keyframes logoFade {
            0% { opacity: 0.7; }
            100% { opacity: 1; }
        }
        
        .cssload-float-rings-loader {
            position: relative;
            transform: scale(1.7);
        }
        
        .bounce-loader {
            transform: scale(1.5);
        }
        
        .loading-overlay {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .partner-logo {
            max-height: 90px;
            width: auto;
            object-fit: contain;
            margin: 0 auto;
        }
        
        .carousel-center-active-item .owl-item {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 80px;
        }
    </style>

    <!-- Google Analytics -->
    @if(config('app.env') === 'production')
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-T21B0FFW8M"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-T21B0FFW8M');
    </script>
    @endif
</head>

<body class="loading-overlay-showing" data-loading-overlay data-plugin-options="{'hideDelay': 500, 'effect': 'floatRings'}">
    <!-- Loading Overlay -->
    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="cssload-float-rings-loader">
                <div class="cssload-float-rings-inner cssload-one"></div>
                <div class="cssload-float-rings-inner cssload-two"></div>
                <div class="cssload-float-rings-inner cssload-three"></div>
                <!-- Logo KAYBIC AFRICA au centre -->
                <div class="cssload-logo-center">
                    <img src="{{ asset('img/logo.png') }}" alt="KAYBIC AFRICA">
                </div>
            </div>
        </div>
    </div>

    <div class="body">
        @include('partials.header')

        <div role="main" class="main px-3 px-lg-5" id="start">
            @yield('content')
        </div>

        @include('partials.footer')
    </div>

    <!-- Off Canvas Navigation -->
    @include('partials.offcanvas')

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
    <!-- jQuery Plugins -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{ asset('vendor/plugins/js/plugins.min.js') }}"></script>

    <!-- Theme Scripts -->
    <script src="{{ asset('js/theme.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/theme.init.js') }}"></script>

    <!-- Custom Scripts -->
    @stack('scripts')

    <!-- Default Carousel Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (window.jQuery && jQuery().owlCarousel) {
                jQuery('.carousel-half-full-width-right .owl-carousel').owlCarousel({
                    responsive: {
                        0: { items: 1 },
                        768: { items: 2 },
                        992: { items: 3 },
                        1200: { items: 4 }
                    },
                    loop: true,
                    nav: true,
                    dots: false,
                    margin: 20,
                    navText: [
                        '<span class="owl-prev"><i class="fas fa-chevron-left"></i></span>',
                        '<span class="owl-next"><i class="fas fa-chevron-right"></i></span>'
                    ]
                });
            }
        });
    </script>
</body>
</html>
