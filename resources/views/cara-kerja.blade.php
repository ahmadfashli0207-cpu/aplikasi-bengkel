@extends('layouts.app')

@section('title', 'Cara Kerja - Mekaniku.id')

@section('content')
<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <div class="badge badge-primary" style="margin-bottom:16px;"><i class="fas fa-route"></i> Cara Kerja</div>
        <h1>Semudah 3 Langkah</h1>
        <p>Dari pesan hingga mekanik datang, semuanya melalui proses yang mudah, cepat, dan transparan</p>
    </div>
</section>

<!-- Steps Detail -->
<section class="section">
    <div class="container">
        <!-- Step 1 -->
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:64px; align-items:center; margin-bottom:80px;">
            <div>
                <div style="display:inline-flex; align-items:center; gap:12px; margin-bottom:24px;">
                    <div style="width:52px;height:52px;background:var(--primary);border-radius:50%;color:#fff;display:flex;align-items:center;justify-content:center;font-size:24px;font-weight:900;flex-shrink:0;">1</div>
                    <div class="badge badge-primary">Langkah Pertama</div>
                </div>
                <h2 style="font-size:36px; margin-bottom:16px;">Pilih Layanan & Kendaraan Anda</h2>
                <p style="color:var(--gray-500); font-size:16px; line-height:1.8; margin-bottom:24px;">
                    Buka aplikasi Mekaniku.id, pilih jenis layanan yang Anda butuhkan mulai dari ganti oli, servis rutin, hingga perbaikan khusus. Masukkan informasi kendaraan Anda dan lokasi penjemputan.
                </p>
                <div style="display:flex; flex-direction:column; gap:12px;">
                    <div style="display:flex; align-items:center; gap:12px;">
                        <i class="fas fa-check-circle" style="color:var(--success); font-size:18px;"></i>
                        <span style="color:var(--gray-700);">Harga sudah tertera transparan per layanan</span>
                    </div>
                    <div style="display:flex; align-items:center; gap:12px;">
                        <i class="fas fa-check-circle" style="color:var(--success); font-size:18px;"></i>
                        <span style="color:var(--gray-700);">Dukung semua merk dan jenis motor</span>
                    </div>
                    <div style="display:flex; align-items:center; gap:12px;">
                        <i class="fas fa-check-circle" style="color:var(--success); font-size:18px;"></i>
                        <span style="color:var(--gray-700);">Jadwal servis sesuai ketersediaan Anda</span>
                    </div>
                </div>
            </div>
            <div style="background:linear-gradient(135deg, #EBF0FF, #DBEAFE); border-radius:var(--radius-xl); padding:48px; text-align:center; box-shadow:var(--shadow-md);">
                <i class="fas fa-mobile-alt" style="font-size:80px; color:var(--primary); opacity:0.7;"></i>
                <p style="margin-top:20px; color:var(--primary); font-weight:600;">Pilih di Aplikasi</p>
            </div>
        </div>

        <!-- Step 2 -->
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:64px; align-items:center; margin-bottom:80px;">
            <div style="background:linear-gradient(135deg, #D1FAE5, #A7F3D0); border-radius:var(--radius-xl); padding:48px; text-align:center; box-shadow:var(--shadow-md); order:-1;">
                <i class="fas fa-motorcycle" style="font-size:80px; color:#059669; opacity:0.7;"></i>
                <p style="margin-top:20px; color:#059669; font-weight:600;">Mekanik dalam Perjalanan</p>
            </div>
            <div>
                <div style="display:inline-flex; align-items:center; gap:12px; margin-bottom:24px;">
                    <div style="width:52px;height:52px;background:#059669;border-radius:50%;color:#fff;display:flex;align-items:center;justify-content:center;font-size:24px;font-weight:900;flex-shrink:0;">2</div>
                    <div class="badge badge-success">Langkah Kedua</div>
                </div>
                <h2 style="font-size:36px; margin-bottom:16px;">Mekanik Datang ke Lokasi Anda</h2>
                <p style="color:var(--gray-500); font-size:16px; line-height:1.8; margin-bottom:24px;">
                    Sistem kami secara otomatis mencocokkan Anda dengan mekanik terdekat dan terbaik. Anda bisa memantau posisi mekanik secara real-time melalui aplikasi hingga tiba di lokasi Anda.
                </p>
                <div style="display:flex; flex-direction:column; gap:12px;">
                    <div style="display:flex; align-items:center; gap:12px;">
                        <i class="fas fa-check-circle" style="color:var(--success); font-size:18px;"></i>
                        <span style="color:var(--gray-700);">Pantau lokasi mekanik secara real-time</span>
                    </div>
                    <div style="display:flex; align-items:center; gap:12px;">
                        <i class="fas fa-check-circle" style="color:var(--success); font-size:18px;"></i>
                        <span style="color:var(--gray-700);">Estimasi waktu kedatangan akurat</span>
                    </div>
                    <div style="display:flex; align-items:center; gap:12px;">
                        <i class="fas fa-check-circle" style="color:var(--success); font-size:18px;"></i>
                        <span style="color:var(--gray-700);">Notifikasi saat mekanik tiba</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Step 3 -->
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:64px; align-items:center;">
            <div>
                <div style="display:inline-flex; align-items:center; gap:12px; margin-bottom:24px;">
                    <div style="width:52px;height:52px;background:var(--accent-dark);border-radius:50%;color:#fff;display:flex;align-items:center;justify-content:center;font-size:24px;font-weight:900;flex-shrink:0;">3</div>
                    <div class="badge badge-warning">Langkah Ketiga</div>
                </div>
                <h2 style="font-size:36px; margin-bottom:16px;">Selesai & Bergaransi</h2>
                <p style="color:var(--gray-500); font-size:16px; line-height:1.8; margin-bottom:24px;">
                    Servis selesai di lokasi Anda tanpa perlu pergi ke bengkel. Anda mendapatkan laporan pekerjaan lengkap dan garansi servis 30 hari. Bayar dengan mudah melalui aplikasi.
                </p>
                <div style="display:flex; flex-direction:column; gap:12px;">
                    <div style="display:flex; align-items:center; gap:12px;">
                        <i class="fas fa-check-circle" style="color:var(--success); font-size:18px;"></i>
                        <span style="color:var(--gray-700);">Laporan pekerjaan detail via aplikasi</span>
                    </div>
                    <div style="display:flex; align-items:center; gap:12px;">
                        <i class="fas fa-check-circle" style="color:var(--success); font-size:18px;"></i>
                        <span style="color:var(--gray-700);">Garansi perbaikan 30 hari penuh</span>
                    </div>
                    <div style="display:flex; align-items:center; gap:12px;">
                        <i class="fas fa-check-circle" style="color:var(--success); font-size:18px;"></i>
                        <span style="color:var(--gray-700);">Bayar setelah selesai, berbagai metode</span>
                    </div>
                </div>
            </div>
            <div style="background:linear-gradient(135deg, #FEF3C7, #FDE68A); border-radius:var(--radius-xl); padding:48px; text-align:center; box-shadow:var(--shadow-md);">
                <i class="fas fa-shield-check" style="font-size:80px; color:var(--accent-dark); opacity:0.7;"></i>
                <p style="margin-top:20px; color:var(--accent-dark); font-weight:600;">Bergaransi 30 Hari</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="section" style="background:var(--gray-50);">
    <div class="container">
        <div class="section-header">
            <div class="badge badge-primary"><i class="fas fa-question-circle"></i> FAQ</div>
            <h2>Pertanyaan yang Sering Ditanyakan</h2>
        </div>
        <div style="max-width:720px; margin:0 auto; display:flex; flex-direction:column; gap:12px;">
            @php
            $faqs = [
                ['q' => 'Apakah ada biaya tambahan selain harga yang tertera?', 'a' => 'Tidak ada! Harga yang tertera di aplikasi sudah final termasuk ongkos kunjungan mekanik. Tidak ada biaya tersembunyi.'],
                ['q' => 'Berapa lama waktu tunggu mekanik datang?', 'a' => 'Rata-rata mekanik tiba dalam 30-60 menit setelah pemesanan dikonfirmasi, tergantung jarak dan ketersediaan mekanik terdekat.'],
                ['q' => 'Area mana saja yang sudah terlayani?', 'a' => 'Saat ini kami melayani Sidoarjo, Surabaya, Gresik, dan Mojokerto. Kami terus berkembang ke kota-kota lain.'],
                ['q' => 'Apa yang dimaksud garansi 30 hari?', 'a' => 'Jika kendaraan mengalami masalah yang sama dalam 30 hari setelah servis, mekanik akan kembali ke lokasi Anda untuk memperbaikinya secara gratis.'],
                ['q' => 'Bagaimana cara membayar?', 'a' => 'Anda bisa membayar via transfer bank, dompet digital (GoPay, OVO, Dana), atau kartu kredit/debit melalui aplikasi setelah pekerjaan selesai.'],
            ];
            @endphp
            @foreach($faqs as $i => $faq)
            <div style="background:#fff; border-radius:var(--radius); border:1px solid var(--gray-200); overflow:hidden;">
                <button onclick="toggleFaq(this)" style="width:100%;text-align:left;padding:20px 24px;border:none;background:none;cursor:pointer;display:flex;justify-content:space-between;align-items:center;font-weight:600;font-size:15px;color:var(--gray-800);">
                    {{ $faq['q'] }}
                    <i class="fas fa-chevron-down" style="color:var(--gray-400);transition:transform 0.3s;flex-shrink:0;margin-left:16px;"></i>
                </button>
                <div class="faq-answer" style="max-height:0;overflow:hidden;transition:max-height 0.3s ease;">
                    <p style="padding:0 24px 20px;color:var(--gray-500);font-size:15px;line-height:1.7;">{{ $faq['a'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section">
    <div class="container">
        <h2 class="cta-title">Siap Merasakan<br>Kemudahannya?</h2>
        <p class="cta-sub">Download aplikasi Mekaniku.id sekarang dan dapatkan promo servis gratis untuk pengguna baru</p>
        <div class="cta-actions">
            <a href="{{ route('dashboard') }}" class="btn btn-white btn-lg">
                <i class="fas fa-mobile-alt"></i>
                Coba Sekarang
            </a>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
function toggleFaq(btn) {
    const answer = btn.nextElementSibling;
    const icon = btn.querySelector('i');
    const isOpen = answer.style.maxHeight !== '0px' && answer.style.maxHeight !== '';
    // Close all
    document.querySelectorAll('.faq-answer').forEach(a => { a.style.maxHeight = '0'; });
    document.querySelectorAll('.faq-answer').forEach((a, idx) => {
        const b = a.previousElementSibling.querySelector('i');
        if(b) b.style.transform = '';
    });
    if (!isOpen) {
        answer.style.maxHeight = answer.scrollHeight + 'px';
        icon.style.transform = 'rotate(180deg)';
    }
}
</script>
@endsection
