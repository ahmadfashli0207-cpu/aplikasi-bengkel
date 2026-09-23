<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\SparePart;
use App\Models\Mechanic;

class DashboardController extends Controller
{
    public function index()
    {
        $services = Service::all();
        $spareParts = SparePart::take(6)->get();
        $mechanics = Mechanic::where('is_available', true)->orderBy('rating', 'desc')->take(4)->get();

        // Demo active orders
        $activeOrders = [
            [
                'id' => 'MNK-00121',
                'service' => 'Ganti Oli & Cek Rutin',
                'vehicle' => 'Honda Vario 150 (W4452 AJ)',
                'status' => 'Selesai & Bergaransi',
                'status_color' => 'success',
                'mechanic' => 'Ahmad Sidik',
                'price' => 'Rp 35.000',
                'date' => '23 Sep 2026',
            ],
            [
                'id' => 'MNK-00118',
                'service' => 'Servis Rutin',
                'vehicle' => 'Yamaha Mio M3 (L1234 BC)',
                'status' => 'Sedang Berproses',
                'status_color' => 'warning',
                'mechanic' => 'Budi Santoso',
                'price' => 'Rp 75.000',
                'date' => '23 Sep 2026',
            ],
        ];

        return view('dashboard', compact('services', 'spareParts', 'mechanics', 'activeOrders'));
    }
}
