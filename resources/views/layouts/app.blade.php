<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $seo['title'] ?? config('app.name') }}</title>
    <meta name="description" content="{{ $seo['description'] ?? 'Mercia Mimarlık olarak modern ve yenilikçi mimari çözümler sunuyoruz.' }}">
    <meta name="keywords" content="{{ $seo['keywords'] ?? 'mimarlık, iç mimarlık, mimari tasarım, mimarlık, merciamimarlik, merciamimarlik.com , mercia mimarlik , mercia mimarlık' }}">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $seo['title'] ?? config('app.name') }}">
    <meta property="og:description" content="{{ $seo['description'] ?? 'Mercia Mimarlık olarak modern ve yenilikçi mimari çözümler sunuyoruz.' }}">
    <meta property="og:image" content="{{ asset('assets/img/og-image.jpg') }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $seo['title'] ?? config('app.name') }}">
    <meta name="twitter:description" content="{{ $seo['description'] ?? 'Mercia Mimarlık olarak modern ve yenilikçi mimari çözümler sunuyoruz.' }}">
    <meta name="twitter:image" content="{{ asset('assets/img/og-image.jpg') }}">

    <!-- Robots -->
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/gallery/gallery-2.jpg') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">
    <!-- Header -->
    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid position-relative d-flex align-items-center justify-content-between">
            <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-xl-0">
                <i class="bi bi-building"></i>
                <h1 class="sitename">Mercia Mimarlık</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Anasayfa</a></li>
                    <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">Hakkımızda</a></li>
                    <li><a href="{{ route('projects') }}" class="{{ request()->routeIs('projects') ? 'active' : '' }}">Projeler</a></li>
                    <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">İletişim</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <div class="header-social-links">
                <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main">

        @yield('content')
    </main>

    <!-- Footer -->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="copyright text-center">
                <p>© <span>Copyright</span> <strong class="px-1 sitename">Mercia Mimarlık</strong> <span>Tüm Hakları Saklıdır</span></p>
            </div>
            <div class="social-links d-flex justify-content-center">
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader">
        <div class="line"></div>
    </div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @stack('scripts')
</body>
</html>
