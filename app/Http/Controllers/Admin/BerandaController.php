<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Buku;

class BerandaController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        return view('admin.pages.beranda.index', compact('buku'));
    }
}
