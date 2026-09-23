@extends('layouts.app')

@section('title', 'Mitra Bengkel - Mekaniku.id')

@section('content')
<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <div class="badge badge-primary" style="margin-bottom:16px;"><i class="fas fa-user-gear"></i> Mitra Bengkel</div>
        <h1>Mekanik Terbaik<br>Siap Melayani Anda</h1>
        <p>{{ $mechanics->count() }} mekanik bersertifikasi tersebar di berbagai wilayah, siap datang ke lokasi Anda</p>
    </div>
</section>

<!-- Stats -->
<section style="background:var(--primary); padding:48px 0;">
    <div class="container">
        <div style="display:grid; grid-template-columns:repeat(4,1fr); gap:24px; text-align:center; color:#fff;">
            <div>
                <div style="font-size:40px;font-weight:900;">{{ $mechanics->count() }}</div>
                <div style="opacity:0.8; margin-top:8px;">Total Mekanik</div>
            </div>
            <div>
                <div style="font-size:40px;font-weight:900;">{{ $mechanics->where('is_available', true)->count() }}</div>
                <div style="opacity:0.8; margin-top:8px;">Tersedia Sekarang</div>
            </div>
            <div>
                <div style="font-size:40px;font-weight:900;">{{ number_format($mechanics->avg('rating'), 1) }}</div>
                <div style="opacity:0.8; margin-top:8px;">Rating Rata-rata</div>
            </div>
            <div>
                <div style="font-size:40px;font-weight:900;">{{ number_format($mechanics->sum('total_orders')) }}</div>
                <div style="opacity:0.8; margin-top:8px;">Total Servis</div>
            </div>
        </div>
    </div>
</section>

<!-- Mechanics Grid -->
<section class="section">
    <div class="container">
        <div class="mechanics-grid">
            @foreach($mechanics as $mechanic)
            <div class="mechanic-card">
                <div style="position:relative; display:inline-block; margin-bottom:0;">
                    <div class="mechanic-avatar">{{ substr($mechanic->name, 0, 1) }}</div>
                    @if($mechanic->is_available)
                    <div style="position:absolute; bottom:4px; right:calc(50% - 48px); width:14px; height:14px; background:#10B981; border-radius:50%; border:2px solid #fff;"></div>
                    @endif
                </div>
                <div class="mechanic-name">{{ $mechanic->name }}</div>
                <div class="mechanic-spec">{{ $mechanic->specialization }}</div>
                <div class="mechanic-location">
                    <i class="fas fa-location-dot" style="color:var(--primary)"></i>
                    {{ $mechanic->location }}
                </div>
                <div style="margin-bottom:16px;">
                    <span class="badge {{ $mechanic->is_available ? 'badge-success' : 'badge-danger' }}">
                        <i class="fas fa-circle" style="font-size:8px"></i>
                        {{ $mechanic->is_available ? 'Tersedia' : 'Sedang Sibuk' }}
                    </span>
                </div>
                <div class="mechanic-stats" style="margin-bottom:20px;">
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
                @if($mechanic->is_available)
                <a href="{{ route('dashboard') }}" class="btn btn-primary btn-sm" style="width:100%; justify-content:center;">
                    <i class="fas fa-tools"></i> Pesan Mekanik Ini
                </a>
                @else
                <button class="btn btn-outline btn-sm" style="width:100%; justify-content:center;" disabled>
                    <i class="fas fa-clock"></i> Tidak Tersedia
                </button>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Become a Mechanic -->
<section class="section" style="background: linear-gradient(135deg, #111827, #1F2937);">
    <div class="container" style="text-align:center;">
        <div class="badge" style="background:rgba(26,86,219,0.3);color:#93C5FD;margin-bottom:20px;">
            <i class="fas fa-handshake"></i> Bergabung Bersama Kami
        </div>
        <h2 style="color:#fff; font-size:clamp(28px, 4vw, 44px); margin-bottom:16px;">Jadilah Mitra Mekanik<br>Mekaniku.id</h2>
        <p style="color:var(--gray-400); font-size:17px; max-width:560px; margin:0 auto 40px;">
            Tingkatkan omzet bengkel Anda dengan bergabung sebagai mitra. Dapatkan pelanggan lebih banyak setiap hari.
        </p>
        <div style="display:grid; grid-template-columns:repeat(3,1fr); gap:24px; max-width:720px; margin:0 auto 48px;">
            @foreach([['fas fa-chart-line','Penghasilan Lebih','Dapatkan order lebih banyak setiap hari'], ['fas fa-users','Platform Terpercaya','Akses ke ribuan pelanggan aktif'], ['fas fa-graduation-cap','Pelatihan Gratis','Training & sertifikasi dari Mekaniku.id']] as $b)
            <div style="background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.1);border-radius:var(--radius-lg);padding:24px;text-align:center;">
                <div style="width:52px;height:52px;background:rgba(26,86,219,0.3);border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 12px;font-size:22px;color:#93C5FD">
                    <i class="{{ $b[0] }}"></i>
                </div>
                <div style="color:#fff;font-weight:700;margin-bottom:6px;">{{ $b[1] }}</div>
                <div style="color:var(--gray-400);font-size:13px;">{{ $b[2] }}</div>
            </div>
            @endforeach
        </div>
        <a href="#" class="btn btn-primary btn-lg">
            <i class="fas fa-user-plus"></i>
            Daftar Jadi Mitra Sekarang
        </a>
    </div>
</section>
@endsection
