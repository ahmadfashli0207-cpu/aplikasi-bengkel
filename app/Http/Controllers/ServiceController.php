<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        $categories = [
            'oil_change' => 'Ganti Oli',
            'routine_service' => 'Servis Rutin',
            'repair' => 'Perbaikan',
            'electric' => 'Kelistrikan',
        ];
        return view('layanan', compact('services', 'categories'));
    }

    public function caraKerja()
    {
        return view('cara-kerja');
    }
}
