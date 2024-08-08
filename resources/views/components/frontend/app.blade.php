<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8" />
    <title>Startseite</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('frontend-assets/files/favicons/apple-touch-icon.webp') }}')}}" />
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('frontend-assets/files/favicons/favicon-32x32.webp') }}')}}" />
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('frontend-assets/files/favicons/favicon-16x16.webp') }}')}}" />
    <link rel="manifest" href="{{ asset('frontend-assets/files/favicons/site.webmanifest') }}" />
    <link rel="mask-icon" href="{{ asset('frontend-assets/files/favicons/safari-pinned-tab.svg') }}')}}"
        color="#e64658" />
    <meta name="msapplication-TileColor" content="#004646" />
    <meta name="theme-color" content="#ffffff" />

    <!-- Google-->
    <meta name="robots" content="noindex,follow" />
    <!-- Google-->

    <!-- Vendor Styles-->
    <!-- <link rel="stylesheet" media="screen" href="{{ asset('frontend-assets/files/simplebar/dist/simplebar.min.css?_v=20240806170230') }}"/>
 <link rel="stylesheet" media="screen" href="{{ asset('frontend-assets/files/lightgallery/css/lightgallery-bundle.min.css?_v=20240806170230') }}"/>
 -->
    <link rel="stylesheet" media="screen"
        href="{{ asset('frontend-assets/files/boxicons/css/boxicons.min.css?_v=20240806170230') }}" />
    <link rel="stylesheet" media="screen"
        href="{{ asset('frontend-assets/files/tiny-slider/dist/tiny-slider.css?_v=20240806170230') }}" />
    <link rel="stylesheet" media="screen"
        href="{{ asset('frontend-assets/files/nouislider/dist/nouislider.min.css?_v=20240806170230') }}" />
    <link rel="stylesheet" media="screen"
        href="{{ asset('frontend-assets/files/flatpickr/dist/flatpickr.min.css?_v=20240806170230') }}" />
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" href="{{ asset('frontend-assets/css/style.min.css?_v=20240806170230') }}" />
    @stack('css')
</head>
<!-- Body-->

<body>
    <main class="page-wrapper">
        <x-frontend.header />

        {{ $slot }}

    </main>
    <!-- Footer-->
    <x-frontend.footer />
    <!-- Back to top button-->
    <a class="btn-scroll-top" href="#top" title="Nach oben" aria-label="Nach oben" data-scroll><span
            class="btn-scroll-top-tooltip text-muted fs-sm me-2">Nach oben</span><i
            class="btn-scroll-top-icon fi-chevron-up"> </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="{{ asset('frontend-assets/files/bootstrap/dist/js/bootstrap.bundle.min.js?_v=20240806170230') }}">
    </script>
    <script src="{{ asset('frontend-assets/files/smooth-scroll/dist/smooth-scroll.polyfills.min.js?_v=20240806170230') }}">
    </script>
    <script src="{{ asset('frontend-assets/files/tiny-slider/dist/min/tiny-slider.js?_v=20240806170230') }}"></script>
    <script src="{{ asset('frontend-assets/files/parallax-js/dist/parallax.min.js?_v=20240806170230') }}"></script>
    <script src="{{ asset('frontend-assets/files/rellax/rellax.min.js?_v=20240806170230') }}"></script>
    <script src="{{ asset('frontend-assets/files/jarallax/dist/jarallax.min.js?_v=20240806170230') }}"></script>
    <script src="{{ asset('frontend-assets/files/nouislider/dist/nouislider.js?_v=20240806170230') }}"></script>
    <script src="{{ asset('frontend-assets/files/flatpickr/dist/flatpickr.min.js?_v=20240806170230') }}"></script>
    <!-- <script src="{{ asset('frontend-assets/files/simplebar/dist/simplebar.min.js?_v=20240806170230') }}"></script>
<script src="{{ asset('frontend-assets/files/lightgallery/lightgallery.min.js?_v=20240806170230') }}"></script>

 -->
    <script src="{{ asset('frontend-assets/files/boxicons/dist/boxicons.js?_v=20240806170230') }}"></script>
    <!-- Main theme script-->
    <script src="{{ asset('frontend-assets/js/app.min.js?_v=20240806170230') }}"></script>
    @stack('js')

</body>

</html>

</body>

</html>
