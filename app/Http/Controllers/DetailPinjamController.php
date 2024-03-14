<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailPinjamController extends Controller
{
    public function index()
    {
        return view('pages.peminjaman');
    }
}