<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mekaniku.id - Platform servis motor panggilan profesional. Mekanik datang ke lokasi Anda dengan harga transparan.">
    <title>@yield('title', 'Mekaniku.id - Servis Motor Panggilan')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @yield('head')
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar" id="navbar">
        <div class="container">
            <div class="navbar-inner">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="navbar-logo">
                    <div class="logo-icon">
                        <i class="fas fa-wrench"></i>
                    </div>
                    <span class="logo-text">Mekaniku<span class="logo-dot">.id</span></span>
                </a>

                <!-- Desktop Nav Links -->
                <div class="navbar-links" id="navLinks">
                    <a href="{{ route('layanan') }}" class="nav-link {{ request()->routeIs('layanan') ? 'active' : '' }}">Layanan</a>
                    <a href="{{ route('cara-kerja') }}" class="nav-link {{ request()->routeIs('cara-kerja') ? 'active' : '' }}">Cara Kerja</a>
                    <a href="{{ route('mitra-bengkel') }}" class="nav-link {{ request()->routeIs('mitra-bengkel') ? 'active' : '' }}">Mitra Bengkel</a>
                    <a href="#" class="nav-link">Karir</a>
                </div>

                <!-- CTA -->
                <div class="navbar-cta">
                    <a href="{{ route('dashboard') }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-mobile-alt"></i>
                        <span>Dashboard App</span>
                    </a>
                    <button class="hamburger" id="hamburger" aria-label="Menu">
                        <span></span><span></span><span></span>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <div class="mobile-menu-links">
            <a href="{{ route('layanan') }}" class="mobile-link">Layanan</a>
            <a href="{{ route('cara-kerja') }}" class="mobile-link">Cara Kerja</a>
            <a href="{{ route('mitra-bengkel') }}" class="mobile-link">Mitra Bengkel</a>
            <a href="#" class="mobile-link">Karir</a>
            <a href="{{ route('dashboard') }}" class="btn btn-primary mobile-cta">Dashboard App</a>
        </div>
    </div>

    <!-- Page Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <div class="footer-logo">
                        <div class="logo-icon logo-icon-sm">
                            <i class="fas fa-wrench"></i>
                        </div>
                        <span class="logo-text">Mekaniku<span class="logo-dot">.id</span></span>
                    </div>
                    <p>Layanan servis motor panggilan profesional. Mekanik bersertifikasi datang ke lokasi Anda.</p>
                    <div class="footer-social">
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-tiktok"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>

                <div class="footer-col">
                    <h4>Layanan</h4>
                    <ul>
                        <li><a href="{{ route('layanan') }}">Ganti Oli</a></li>
                        <li><a href="{{ route('layanan') }}">Servis Rutin</a></li>
                        <li><a href="{{ route('layanan') }}">Perbaikan Rem</a></li>
                        <li><a href="{{ route('layanan') }}">Tune Up</a></li>
                        <li><a href="{{ route('layanan') }}">Kelistrikan</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Perusahaan</h4>
                    <ul>
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="{{ route('cara-kerja') }}">Cara Kerja</a></li>
                        <li><a href="{{ route('mitra-bengkel') }}">Mitra Bengkel</a></li>
                        <li><a href="#">Karir</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Download App</h4>
                    <p style="margin-bottom:16px; font-size:14px; color:var(--gray-400);">Pesan servis lebih mudah lewat aplikasi kami</p>
                    <a href="#" class="store-btn">
                        <i class="fab fa-google-play"></i>
                        <div>
                            <span class="store-sub">Download di</span>
                            <span class="store-name">Google Play</span>
                        </div>
                    </a>
                    <a href="#" class="store-btn" style="margin-top:8px;">
                        <i class="fab fa-apple"></i>
                        <div>
                            <span class="store-sub">Download di</span>
                            <span class="store-name">App Store</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2026 Mekaniku.id. Semua hak dilindungi.</p>
                <div class="footer-bottom-links">
                    <a href="#">Kebijakan Privasi</a>
                    <a href="#">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- JS -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
