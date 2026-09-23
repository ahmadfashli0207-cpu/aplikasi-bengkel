@extends('layouts.app')

@section('title', 'Mekaniku.id - Servis Motor Panggilan Profesional')

@section('content')

<!-- ===== HERO ===== -->
<section class="hero">
    <div class="container">
        <div class="hero-inner">
            <!-- Left: Text -->
            <div class="hero-text animate-fadeInUp">
                <div class="hero-badge">
                    <div class="dot"></div>
                    Telah hadir di Sidoarjo & Sekitarnya
                </div>
                <h1 class="hero-title">
                    Motor Bermasalah?<br>
                    Biar <span class="highlight">Mekanik Kami</span><br>
                    Yang Datang.
                </h1>
                <p class="hero-subtitle">
                    Layanan servis motor panggilan profesional. Harga transparan tanpa biaya tersembunyi, pengerjaan cepat di lokasi Anda.
                </p>
                <div class="hero-actions">
                    <a href="{{ route('dashboard') }}" class="btn btn-primary btn-lg">
                        <i class="fas fa-mobile-alt"></i>
                        Download Sekarang
                    </a>
                    <a href="{{ route('cara-kerja') }}" class="btn btn-ghost btn-lg">
                        Lihat Cara Kerja
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="hero-social-proof">
                    <div class="avatar-group">
                        @foreach(['A','B','C','D'] as $i => $letter)
                            <div class="avatar" style="background: linear-gradient(135deg, hsl({{ 210 + $i*20 }}, 80%, 55%), hsl({{ 220 + $i*20 }}, 70%, 65%))">{{ $letter }}</div>
                        @endforeach
                    </div>
                    <div class="social-proof-text">
                        Dipercaya oleh <strong>{{ $stats['users'] }} pengendara</strong> di Jawa Timur
                    </div>
                </div>
            </div>

            <!-- Right: Visual -->
            <div class="hero-visual animate-fadeInUp delay-2">
                <div class="hero-image-container">
                    <div class="hero-photo-placeholder">
                        <i class="fas fa-motorcycle"></i>
                        <span>Mekanik Profesional</span>
                    </div>

                    <!-- Floating Cards -->
                    <div class="float-card float-card-1">
                        <div class="float-icon float-icon-green">
                            <i class="fas fa-shield-check"></i>
                        </div>
                        <div>
                            <div class="float-text-main">Bergaransi 30 Hari</div>
                            <div class="float-text-sub">Garansi Servis</div>
                        </div>
                    </div>
                    <div class="float-card float-card-2">
                        <div class="float-icon float-icon-blue">
                            <i class="fas fa-location-dot"></i>
                        </div>
                        <div>
                            <div class="float-text-main">Home Service</div>
                            <div class="float-text-sub">Mekanik Datang ke Anda</div>
                        </div>
                    </div>
                    <div class="float-card float-card-3">
                        <div class="float-icon float-icon-yellow">
                            <i class="fas fa-star"></i>
                        </div>
                        <div>
                            <div class="float-text-main">Rating 4.9/5</div>
                            <div class="float-text-sub">1.200+ Ulasan</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== PARTNERS ===== -->
<section class="partners-section">
    <div class="container">
        <p class="partners-label">Suku Cadang Asli dari Mitra Resmi</p>
        <div class="partners-row">
            <span class="partner-logo">ASTRA OTOPARTS</span>
            <span class="partner-logo">MOTUL</span>
            <span class="partner-logo">FEDERAL OIL</span>
            <span class="partner-logo">GS ASTRA</span>
            <span class="partner-logo">NGK</span>
            <span class="partner-logo">SHELL</span>
        </div>
    </div>
</section>

<!-- ===== STATS ===== -->
<section class="stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item">
                <div class="stat-number" data-target="2000">0</div>
                <div class="stat-label">Pengguna Aktif</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" data-target="50">0</div>
                <div class="stat-label">Mekanik Bersertifikasi</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" data-target="10">0</div>
                <div class="stat-label">Kota Layanan</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" data-target="5000">0</div>
                <div class="stat-label">Servis Selesai</div>
            </div>
        </div>
    </div>
</section>

<!-- ===== SERVICES ===== -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <div class="badge badge-primary"><i class="fas fa-tools"></i> Layanan Kami</div>
            <h2>Servis Lengkap<br>untuk Motor Anda</h2>
            <p>Dari ganti oli hingga servis besar, semua bisa dilakukan di lokasi Anda</p>
        </div>

        <div class="services-grid">
            @foreach($services as $service)
            <div class="service-card">
                @if($service->is_popular)
                <div class="service-popular-badge">⭐ Populer</div>
                @endif
                <div class="service-icon">
                    @switch($service->category)
                        @case('oil_change') <i class="fas fa-oil-can"></i> @break
                        @case('routine_service') <i class="fas fa-tools"></i> @break
                        @case('repair') <i class="fas fa-wrench"></i> @break
                        @case('electric') <i class="fas fa-bolt"></i> @break
                        @default <i class="fas fa-cog"></i>
                    @endswitch
                </div>
                <div class="service-name">{{ $service->name }}</div>
                <div class="service-desc">{{ $service->description }}</div>
                <div class="service-price">Mulai {{ $service->formatted_price }}</div>
                <div class="service-duration"><i class="far fa-clock"></i> ±{{ $service->duration }} menit</div>
            </div>
            @endforeach
        </div>

        <div style="text-align:center; margin-top:40px;">
            <a href="{{ route('layanan') }}" class="btn btn-outline">
                Lihat Semua Layanan
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- ===== HOW IT WORKS ===== -->
<section class="section howitworks-section">
    <div class="container">
        <div class="section-header">
            <div class="badge badge-primary"><i class="fas fa-route"></i> Cara Kerja</div>
            <h2>Bengkel Pindah<br>ke Garasi Anda</h2>
            <p>Proses pemesanan yang mudah dan cepat, 3 langkah saja</p>
        </div>

        <div class="steps-grid">
            <div class="step-item animate-fadeInUp">
                <div class="step-number">1</div>
                <div class="step-title">Pilih Layanan</div>
                <div class="step-desc">Pilih jenis servis yang Anda butuhkan dan kendaraan Anda melalui aplikasi. Harga sudah tertera transparan.</div>
            </div>
            <div class="step-item animate-fadeInUp delay-2">
                <div class="step-number">2</div>
                <div class="step-title">Mekanik Datang</div>
                <div class="step-desc">Mekanik terdekat dikonfirmasi dan langsung menuju lokasi Anda. Pantau real-time di aplikasi.</div>
            </div>
            <div class="step-item animate-fadeInUp delay-3">
                <div class="step-number">3</div>
                <div class="step-title">Selesai & Bergaransi</div>
                <div class="step-desc">Servis selesai di tempat Anda dengan garansi 30 hari. Bayar setelah selesai, tidak perlu antri.</div>
            </div>
        </div>

        <div style="text-align:center; margin-top:48px;">
            <a href="{{ route('cara-kerja') }}" class="btn btn-primary btn-lg">
                Pelajari Lebih Lanjut
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- ===== FEATURES ===== -->
<section class="section">
    <div class="container">
        <div class="features-grid">
            <!-- App Preview -->
            <div class="app-preview">
                <div class="phone-mockup">
                    <div class="phone-screen">
                        <div class="phone-statusbar">
                            <span>9:41</span>
                            <div style="display:flex;gap:6px;font-size:11px">
                                <i class="fas fa-wifi"></i>
                                <i class="fas fa-battery-full"></i>
                            </div>
                        </div>
                        <div class="phone-header">
                            <div>
                                <div class="phone-greeting">SELAMAT PAGI,</div>
                                <div class="phone-name">Rizki Ramadhan</div>
                            </div>
                            <div style="position:relative; width:32px; height:32px; background:var(--gray-100); border-radius:50%; display:flex; align-items:center; justify-content:center;">
                                <i class="fas fa-bell" style="font-size:14px; color:var(--gray-600)"></i>
                                <div style="position:absolute;top:4px;right:4px;width:8px;height:8px;background:var(--accent);border-radius:50%;border:2px solid #fff;"></div>
                            </div>
                        </div>
                        <div class="phone-body">
                            <div class="promo-card">
                                <div class="promo-tag">PROMO SPESIAL</div>
                                <div class="promo-title">Diskon 50%<br>Ongkos Servis</div>
                                <div class="promo-sub">Khusus pengguna baru Sidoarjo</div>
                                <a href="#" class="promo-btn">Klaim Sekarang</a>
                            </div>
                            <div class="quick-actions">
                                <div class="quick-action">
                                    <div class="quick-action-icon qa-blue"><i class="fas fa-tools"></i></div>
                                    Panggil Mekanik
                                </div>
                                <div class="quick-action">
                                    <div class="quick-action-icon qa-orange"><i class="fas fa-box"></i></div>
                                    Pesan Sparepart
                                </div>
                            </div>
                            <div class="order-mini">
                                <div class="order-mini-title">PESANAN AKTIF</div>
                                <div class="order-mini-service">Ganti Oli & Cek Rutin</div>
                                <div class="order-mini-vehicle">Honda Vario 150 (W-4452 AJ)</div>
                                <div class="order-mini-status"><i class="fas fa-check-circle"></i> Selesai & Bergaransi</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Features list -->
            <div>
                <div class="section-header" style="text-align:left; margin-bottom:40px;">
                    <div class="badge badge-primary"><i class="fas fa-star"></i> Keunggulan</div>
                    <h2>Mengapa Pilih<br>Mekaniku.id?</h2>
                    <p>Kami hadir untuk memberikan pengalaman servis terbaik dengan standar bengkel resmi</p>
                </div>

                <div class="features-list">
                    <div class="feature-item">
                        <div class="feature-icon feature-icon-blue">
                            <i class="fas fa-home"></i>
                        </div>
                        <div>
                            <div class="feature-title">Home Service — Tanpa Biaya Antar</div>
                            <div class="feature-desc">Mekanik datang ke rumah, kantor, atau mana saja. Tidak perlu dorong motor ke bengkel.</div>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon feature-icon-green">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div>
                            <div class="feature-title">Garansi Servis 30 Hari</div>
                            <div class="feature-desc">Setiap pekerjaan dijamin bergaransi. Jika ada masalah, mekanik kami siap kembali gratis.</div>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon feature-icon-yellow">
                            <i class="fas fa-receipt"></i>
                        </div>
                        <div>
                            <div class="feature-title">Harga Transparan — No Hidden Fee</div>
                            <div class="feature-desc">Semua harga sudah tertera di aplikasi. Bayar sesuai yang tertera, tidak ada biaya tambahan tersembunyi.</div>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon feature-icon-purple">
                            <i class="fas fa-boxes-stacked"></i>
                        </div>
                        <div>
                            <div class="feature-title">Toko Suku Cadang Terintegrasi</div>
                            <div class="feature-desc">Pesan sparepart langsung dari aplikasi dengan harga terbaik dari distributor resmi.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== MECHANICS ===== -->
<section class="section" style="background: var(--gray-50)">
    <div class="container">
        <div class="section-header">
            <div class="badge badge-primary"><i class="fas fa-user-gear"></i> Tim Mekanik</div>
            <h2>Mekanik Terbaik<br>Siap Melayani Anda</h2>
            <p>Semua mekanik telah bersertifikasi dan berpengalaman di bidangnya</p>
        </div>

        <div class="mechanics-grid">
            @foreach($mechanics->take(3) as $mechanic)
            <div class="mechanic-card">
                <div class="mechanic-avatar">{{ substr($mechanic->name, 0, 1) }}</div>
                <div class="mechanic-name">{{ $mechanic->name }}</div>
                <div class="mechanic-spec">{{ $mechanic->specialization }}</div>
                <div class="mechanic-location">
                    <i class="fas fa-location-dot" style="color:var(--primary)"></i>
                    {{ $mechanic->location }}
                </div>
                <div style="margin-bottom:12px">
                    <span class="badge {{ $mechanic->is_available ? 'badge-success' : 'badge-danger' }}">
                        <i class="fas fa-circle" style="font-size:8px"></i>
                        {{ $mechanic->is_available ? 'Tersedia' : 'Sibuk' }}
                    </span>
                </div>
                <div class="mechanic-stats">
                    <div class="mech-stat">
                        <div class="mech-stat-value">
                            <span class="rating-stars">★</span> {{ $mechanic->rating }}
                        </div>
                        <div class="mech-stat-label">Rating</div>
                    </div>
                    <div class="mech-stat">
                        <div class="mech-stat-value">{{ $mechanic->total_orders }}</div>
                        <div class="mech-stat-label">Servis</div>
                    </div>
                    <div class="mech-stat">
                        <div class="mech-stat-value">{{ $mechanic->experience_years }}th</div>
                        <div class="mech-stat-label">Pengalaman</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div style="text-align:center; margin-top:40px;">
            <a href="{{ route('mitra-bengkel') }}" class="btn btn-outline">
                Lihat Semua Mekanik
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- ===== CTA ===== -->
<section class="cta-section">
    <div class="container">
        <div class="badge badge-primary" style="margin-bottom:16px; background:rgba(255,255,255,0.15); color:#fff;">
            <i class="fas fa-rocket"></i> Mulai Sekarang
        </div>
        <h2 class="cta-title">Omzet Bengkel Anda<br>Bisa Meningkat</h2>
        <p class="cta-sub">Bergabunglah sebagai mitra mekanik Mekaniku.id dan dapatkan pelanggan lebih banyak setiap hari</p>
        <div class="cta-actions">
            <a href="{{ route('dashboard') }}" class="btn btn-white btn-lg">
                <i class="fas fa-mobile-alt"></i>
                Download App Sekarang
            </a>
            <a href="{{ route('mitra-bengkel') }}" class="btn btn-lg" style="background:rgba(255,255,255,0.15); color:#fff; border:2px solid rgba(255,255,255,0.3);">
                <i class="fas fa-handshake"></i>
                Daftar Jadi Mitra
            </a>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
// Counter animation
function animateCounter(el) {
    const target = parseInt(el.getAttribute('data-target'));
    const suffix = target >= 1000 ? '+' : '+';
    let current = 0;
    const step = Math.ceil(target / 60);
    const timer = setInterval(() => {
        current = Math.min(current + step, target);
        el.textContent = current.toLocaleString('id-ID') + (target >= 100 ? '+' : '+');
        if (current >= target) clearInterval(timer);
    }, 30);
}

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const counters = entry.target.querySelectorAll('[data-target]');
            counters.forEach(animateCounter);
            observer.unobserve(entry.target);
        }
    });
}, { threshold: 0.3 });

const statsSection = document.querySelector('.stats-section');
if (statsSection) observer.observe(statsSection);
</script>
@endsection
