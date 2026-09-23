@extends('layouts.app')

@section('title', 'Dashboard - Mekaniku.id')

@section('head')
<style>
body { background: #F3F4F6; }
</style>
@endsection

@section('content')
<div class="dashboard-wrapper">

    <!-- Dashboard Header -->
    <div class="dashboard-header">
        <div class="container">
            <div class="dashboard-header-inner">
                <div>
                    <div class="dash-greeting">SELAMAT PAGI,</div>
                    <div class="dash-name">Rizki Ramadhan</div>
                </div>
                <div class="dash-notification">
                    <i class="fas fa-bell"></i>
                    <div class="notif-dot"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Dashboard Content -->
    <div class="dashboard-content">
        <div class="container">

            <!-- Promo Card -->
            <div class="dash-promo-card">
                <div class="dash-promo-tag">PROMO SPESIAL</div>
                <div class="dash-promo-title">Diskon 50%<br>Ongkos Servis</div>
                <div class="dash-promo-sub">Khusus pengguna baru Sidoarjo</div>
                <a href="#pesan-section" class="dash-promo-btn">Klaim Sekarang →</a>
            </div>

            <!-- Quick Actions -->
            <div class="dash-quick-actions">
                <div class="dash-qa" onclick="document.getElementById('pesan-section').scrollIntoView({behavior:'smooth'})">
                    <div class="dash-qa-icon dqa-blue">
                        <i class="fas fa-tools"></i>
                    </div>
                    <div class="dash-qa-title">Panggil Mekanik</div>
                    <div class="dash-qa-sub">Servis di lokasi Anda</div>
                </div>
                <div class="dash-qa" onclick="document.getElementById('sparepart-section').scrollIntoView({behavior:'smooth'})">
                    <div class="dash-qa-icon dqa-orange">
                        <i class="fas fa-box-open"></i>
                    </div>
                    <div class="dash-qa-title">Pesan Sparepart</div>
                    <div class="dash-qa-sub">Suku cadang original</div>
                </div>
            </div>

            <!-- Active Orders -->
            <div>
                <div class="dash-section-header">
                    <div class="dash-section-title">Pesanan Aktif</div>
                    <a href="#" class="dash-see-all">Lihat Semua</a>
                </div>
                <div class="orders-list">
                    @foreach($activeOrders as $order)
                    <div class="order-card">
                        <div class="order-icon">
                            <i class="fas fa-oil-can"></i>
                        </div>
                        <div style="flex:1;">
                            <div class="order-service-name">{{ $order['service'] }}</div>
                            <div class="order-vehicle">{{ $order['vehicle'] }}</div>
                            <div style="margin-top:6px;">
                                @if($order['status_color'] === 'success')
                                <span class="badge badge-success" style="font-size:11px;padding:3px 10px;">
                                    <i class="fas fa-check-circle" style="font-size:10px;"></i>
                                    {{ $order['status'] }}
                                </span>
                                @else
                                <span class="badge badge-warning" style="font-size:11px;padding:3px 10px;">
                                    <i class="fas fa-spinner" style="font-size:10px;"></i>
                                    {{ $order['status'] }}
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="order-meta">
                            <div class="order-price">{{ $order['price'] }}</div>
                            <div class="order-id">#{{ $order['id'] }}</div>
                            <div style="font-size:11px;color:var(--gray-400);margin-top:4px;">{{ $order['mechanic'] }}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Service Selection Section -->
            <div id="pesan-section">
                <div class="dash-section-header" style="margin-bottom:16px;">
                    <div class="dash-section-title">Pesan Servis Baru</div>
                </div>
                <div class="service-order-section">
                    <h3 style="margin-bottom:16px; font-size:16px; color:var(--gray-700);">Kendaraan Anda</h3>
                    <div class="vehicle-selector">
                        <div class="vehicle-info">
                            <span class="vehicle-icon">🏍️</span>
                            <div>
                                <div class="vehicle-name">Honda Vario 150</div>
                                <div class="vehicle-plate">W - 4452 AJ</div>
                            </div>
                        </div>
                        <i class="fas fa-chevron-right" style="color:var(--gray-400);"></i>
                    </div>

                    <h3 style="margin-bottom:16px; font-size:16px; color:var(--gray-700);">Pilih Layanan</h3>
                    <div class="service-options">
                        @foreach($services->take(4) as $i => $service)
                        <div class="service-option {{ $i === 0 ? 'selected' : '' }}">
                            <div class="so-icon">
                                @switch($service->category)
                                    @case('oil_change') 🛢️ @break
                                    @case('routine_service') 🔧 @break
                                    @case('repair') ⚙️ @break
                                    @case('electric') ⚡ @break
                                    @default 🔩
                                @endswitch
                            </div>
                            <div class="so-name">{{ $service->name }}</div>
                            <div class="so-price">Rp {{ number_format($service->price, 0, ',', '.') }}</div>
                        </div>
                        @endforeach
                    </div>

                    <div style="background:var(--primary-light); border-radius:var(--radius-sm); padding:16px; margin-bottom:20px; display:flex; justify-content:space-between; align-items:center;">
                        <div>
                            <div style="font-size:13px; color:var(--primary); font-weight:600;">Estimasi Biaya</div>
                            <div style="font-size:22px; font-weight:900; color:var(--primary);">Rp 35.000</div>
                        </div>
                        <div style="text-align:right; font-size:13px; color:var(--primary); opacity:0.8;">
                            <div>±30 menit</div>
                            <div>Tidak ada biaya tambahan</div>
                        </div>
                    </div>

                    <a href="#" class="btn btn-primary" style="width:100%; justify-content:center; font-size:16px; padding:16px;">
                        <i class="fas fa-search-location"></i>
                        Cari Mekanik Terdekat
                    </a>
                </div>
            </div>

            <!-- Nearby Mechanics -->
            <div>
                <div class="dash-section-header">
                    <div class="dash-section-title">Mekanik Terdekat</div>
                    <a href="{{ route('mitra-bengkel') }}" class="dash-see-all">Lihat Semua</a>
                </div>
                <div style="display:flex; flex-direction:column; gap:12px; margin-bottom:24px;">
                    @foreach($mechanics as $mechanic)
                    <div style="background:#fff; border-radius:var(--radius-lg); padding:16px; box-shadow:var(--shadow-sm); display:flex; align-items:center; gap:16px; border:1px solid var(--gray-100);">
                        <div style="width:50px;height:50px;border-radius:50%;background:linear-gradient(135deg,var(--primary),#60A5FA);display:flex;align-items:center;justify-content:center;color:#fff;font-size:18px;font-weight:700;flex-shrink:0;">
                            {{ substr($mechanic->name, 0, 1) }}
                        </div>
                        <div style="flex:1;">
                            <div style="font-weight:700; font-size:15px; color:var(--gray-900);">{{ $mechanic->name }}</div>
                            <div style="font-size:13px; color:var(--gray-500);">{{ $mechanic->specialization }}</div>
                            <div style="font-size:12px; color:var(--gray-400);margin-top:2px;">
                                <i class="fas fa-location-dot" style="color:var(--primary);font-size:10px;"></i>
                                {{ $mechanic->location }}
                            </div>
                        </div>
                        <div style="text-align:right;">
                            <div style="font-size:14px;font-weight:800;color:var(--accent);">★ {{ $mechanic->rating }}</div>
                            <div style="font-size:11px;color:var(--gray-400);">{{ $mechanic->total_orders }} servis</div>
                            <span class="badge {{ $mechanic->is_available ? 'badge-success' : 'badge-danger' }}" style="font-size:10px;padding:2px 8px;margin-top:4px;">
                                {{ $mechanic->is_available ? 'Tersedia' : 'Sibuk' }}
                            </span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Spare Parts -->
            <div id="sparepart-section">
                <div class="dash-section-header">
                    <div class="dash-section-title">Suku Cadang Populer</div>
                    <a href="#" class="dash-see-all">Lihat Semua</a>
                </div>
                <div class="spareparts-grid-dash">
                    @foreach($spareParts as $part)
                    <div class="sp-card">
                        <div class="sp-icon">
                            @switch($part->category)
                                @case('oil') 🛢️ @break
                                @case('filter') 🔵 @break
                                @case('spark_plug') ⚡ @break
                                @case('brake') 🔴 @break
                                @case('battery') 🔋 @break
                                @default ⚙️
                            @endswitch
                        </div>
                        <div class="sp-name">{{ Str::limit($part->name, 18) }}</div>
                        <div class="sp-brand">{{ $part->brand }}</div>
                        <div class="sp-price">Rp {{ number_format($part->price, 0, ',', '.') }}</div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div style="height:40px;"></div>
        </div>
    </div>
</div>
@endsection
