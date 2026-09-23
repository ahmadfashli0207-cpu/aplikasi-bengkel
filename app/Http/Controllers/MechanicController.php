<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mechanic;

class MechanicController extends Controller
{
    public function index()
    {
        $mechanics = Mechanic::orderBy('rating', 'desc')->get();
        return view('mitra-bengkel', compact('mechanics'));
    }
}
