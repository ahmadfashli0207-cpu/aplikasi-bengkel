@extends('layouts.app')

@section('title', 'Layanan Servis Motor - Mekaniku.id')

@section('head')
<style>
.filter-bar { display: flex; gap: 12px; flex-wrap: wrap; margin-bottom: 40px; justify-content: center; }
.filter-btn {
    padding: 10px 22px;
    border-radius: 100px;
    border: 2px solid var(--gray-200);
    background: #fff;
    font-weight: 600;
    font-size: 14px;
    color: var(--gray-600);
    cursor: pointer;
    transition: all var(--transition);
}
.filter-btn:hover, .filter-btn.active {
    background: var(--primary);
    border-color: var(--primary);
    color: #fff;
}
</style>
@endsection

@section('content')
<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <div class="badge badge-primary" style="margin-bottom:16px;"><i class="fas fa-tools"></i> Layanan Kami</div>
        <h1>Servis Lengkap untuk<br>Semua Jenis Motor</h1>
        <p>Harga transparan, mekanik bersertifikasi, garansi 30 hari. Pesan sekarang lewat aplikasi.</p>
    </div>
</section>

<!-- Services -->
<section class="section">
    <div class="container">
        <!-- Filter -->
        <div class="filter-bar">
            <button class="filter-btn active" data-filter="all">Semua</button>
            @foreach($categories as $key => $label)
            <button class="filter-btn" data-filter="{{ $key }}">{{ $label }}</button>
            @endforeach
        </div>

        <!-- Services Grid -->
        <div class="services-grid">
            @foreach($services as $service)
            <div class="service-card" data-category="{{ $service->category }}">
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
                <div style="margin-top:16px;">
                    <a href="{{ route('dashboard') }}" class="btn btn-primary btn-sm" style="width:100%; justify-content:center;">
                        <i class="fas fa-shopping-cart"></i> Pesan Sekarang
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Why Choose -->
<section class="section" style="background:var(--gray-50); padding-top:0; padding-bottom:80px;">
    <div class="container">
        <div class="section-header">
            <h2>Garansi & Jaminan Kualitas</h2>
            <p>Setiap pekerjaan dilindungi garansi penuh untuk ketenangan pikiran Anda</p>
        </div>
        <div style="display:grid; grid-template-columns: repeat(3,1fr); gap:24px;">
            <div class="card" style="text-align:center; border: none;">
                <div style="width:64px;height:64px;background:var(--primary-light);border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 16px;font-size:26px;color:var(--primary)">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 style="margin-bottom:8px;">Garansi 30 Hari</h3>
                <p style="color:var(--gray-500);font-size:14px;">Semua pekerjaan dijamin selama 30 hari. Jika ada masalah, mekanik kembali gratis.</p>
            </div>
            <div class="card" style="text-align:center; border: none;">
                <div style="width:64px;height:64px;background:#D1FAE5;border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 16px;font-size:26px;color:#059669">
                    <i class="fas fa-certificate"></i>
                </div>
                <h3 style="margin-bottom:8px;">Mekanik Bersertifikasi</h3>
                <p style="color:var(--gray-500);font-size:14px;">Semua mekanik melewati seleksi ketat dan memiliki sertifikat keahlian resmi.</p>
            </div>
            <div class="card" style="text-align:center; border: none;">
                <div style="width:64px;height:64px;background:#FEF3C7;border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 16px;font-size:26px;color:var(--accent-dark)">
                    <i class="fas fa-receipt"></i>
                </div>
                <h3 style="margin-bottom:8px;">Harga Transparan</h3>
                <p style="color:var(--gray-500);font-size:14px;">Harga sudah tetap dan tertera sejak awal. Tidak ada biaya berubah-ubah setelah selesai.</p>
            </div>
        </div>
    </div>
</section>
@endsection
