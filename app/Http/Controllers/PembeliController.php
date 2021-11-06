<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;

class PembeliController extends Controller
{
    public function beli()
    {
        $pembeli = Pembeli::all();
        return view('pembeli', compact('pembeli'));
    }
}
