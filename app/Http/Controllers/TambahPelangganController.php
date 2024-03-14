<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahPelangganController extends Controller
{
    public function tambahpelanggan()
    {
        return view('pelanggan.tambahpelanggan');
    }
}
