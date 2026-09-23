<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Mechanic;
use App\Models\SparePart;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::where('is_popular', true)->take(6)->get();
        $mechanics = Mechanic::where('is_available', true)->orderBy('rating', 'desc')->take(6)->get();
        $spareParts = SparePart::where('is_featured', true)->take(4)->get();

        $stats = [
            'users' => '2.000+',
            'mechanics' => '50+',
            'cities' => '10+',
            'orders' => '5.000+',
        ];

        return view('welcome', compact('services', 'mechanics', 'spareParts', 'stats'));
    }
}
