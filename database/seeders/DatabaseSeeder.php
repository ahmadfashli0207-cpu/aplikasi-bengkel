<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\Mechanic;
use App\Models\SparePart;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Services
        $services = [
            ['name' => 'Ganti Oli', 'description' => 'Penggantian oli mesin dengan produk berkualitas. Termasuk pemeriksaan level oli dan filter.', 'price' => 35000, 'duration' => 30, 'icon' => 'oil-can', 'category' => 'oil_change', 'is_popular' => true],
            ['name' => 'Servis Rutin', 'description' => 'Perawatan lengkap meliputi pembersihan karburator, ganti busi, cek rem, dan rantai.', 'price' => 75000, 'duration' => 60, 'icon' => 'tools', 'category' => 'routine_service', 'is_popular' => true],
            ['name' => 'Ganti Ban', 'description' => 'Penggantian ban depan atau belakang dengan ban bergaransi resmi dari distributor terpercaya.', 'price' => 120000, 'duration' => 45, 'icon' => 'circle', 'category' => 'repair', 'is_popular' => false],
            ['name' => 'Servis Rem', 'description' => 'Pemeriksaan dan perbaikan sistem rem, penggantian kampas rem jika diperlukan.', 'price' => 55000, 'duration' => 40, 'icon' => 'brake-warning', 'category' => 'repair', 'is_popular' => false],
            ['name' => 'Tune Up', 'description' => 'Setel ulang mesin lengkap: karburator, busi, filter udara, dan sistem pengapian untuk performa optimal.', 'price' => 150000, 'duration' => 90, 'icon' => 'gauge', 'category' => 'routine_service', 'is_popular' => true],
            ['name' => 'Perbaikan Kelistrikan', 'description' => 'Diagnosis dan perbaikan masalah kelistrikan: aki, lampu, kiprok, starter, dan kabel-kabel.', 'price' => 100000, 'duration' => 60, 'icon' => 'zap', 'category' => 'electric', 'is_popular' => false],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }

        // Mechanics
        $mechanics = [
            ['name' => 'Ahmad Sidik', 'rating' => 4.9, 'specialization' => 'Mesin & Karburator', 'location' => 'Sidoarjo', 'is_available' => true, 'total_orders' => 312, 'experience_years' => 8],
            ['name' => 'Budi Santoso', 'rating' => 4.8, 'specialization' => 'Kelistrikan Motor', 'location' => 'Surabaya Selatan', 'is_available' => true, 'total_orders' => 245, 'experience_years' => 6],
            ['name' => 'Rizki Pratama', 'rating' => 4.7, 'specialization' => 'Servis Umum', 'location' => 'Surabaya Utara', 'is_available' => false, 'total_orders' => 187, 'experience_years' => 4],
            ['name' => 'Dani Kurniawan', 'rating' => 5.0, 'specialization' => 'Matic & Injeksi', 'location' => 'Gresik', 'is_available' => true, 'total_orders' => 428, 'experience_years' => 10],
            ['name' => 'Eko Wahyudi', 'rating' => 4.6, 'specialization' => 'Rem & Suspensi', 'location' => 'Surabaya Timur', 'is_available' => true, 'total_orders' => 156, 'experience_years' => 3],
            ['name' => 'Fajar Nugroho', 'rating' => 4.8, 'specialization' => 'Mesin Sport', 'location' => 'Mojokerto', 'is_available' => true, 'total_orders' => 289, 'experience_years' => 7],
        ];

        foreach ($mechanics as $mechanic) {
            Mechanic::create($mechanic);
        }

        // Spare Parts
        $spareParts = [
            ['name' => 'Oli Mesin Shell Advance', 'brand' => 'Shell', 'price' => 55000, 'stock' => 150, 'category' => 'oil', 'is_featured' => true, 'description' => 'Oli mesin 4T untuk motor matic dan manual'],
            ['name' => 'Oli Mesin Motul 3000', 'brand' => 'MOTUL', 'price' => 65000, 'stock' => 80, 'category' => 'oil', 'is_featured' => true, 'description' => 'Oli mesin mineral berkualitas tinggi'],
            ['name' => 'Filter Oli Honda Beat', 'brand' => 'Honda', 'price' => 25000, 'stock' => 200, 'category' => 'filter', 'is_featured' => false, 'description' => 'Filter oli original Honda untuk motor Beat'],
            ['name' => 'Busi NGK CPR6EA', 'brand' => 'NGK', 'price' => 30000, 'stock' => 120, 'category' => 'spark_plug', 'is_featured' => true, 'description' => 'Busi motor matic tipe standar'],
            ['name' => 'Kampas Rem Depan Yamaha', 'brand' => 'Yamaha', 'price' => 45000, 'stock' => 75, 'category' => 'brake', 'is_featured' => false, 'description' => 'Kampas rem cakram depan original Yamaha'],
            ['name' => 'Aki GS Astra 5Ah', 'brand' => 'GS Astra', 'price' => 185000, 'stock' => 40, 'category' => 'battery', 'is_featured' => true, 'description' => 'Aki motor 12V 5Ah untuk motor matic'],
        ];

        foreach ($spareParts as $part) {
            SparePart::create($part);
        }
    }
}
