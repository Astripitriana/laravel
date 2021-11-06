<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;

class PembelianController extends Controller
{
    public function pembelian()
    {
        $pembelian = Pembelian::all();
        return view('pembelian', compact('pembelian'));
    }
}
