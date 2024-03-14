<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\DB;


class PelangganController extends Controller
{
    public function index()
    {
        
        return view('pelanggan.indexpelanggan');
    }
    public function tambahpelanggan()
    {
        return view('pelanggan.tambahpelanggan');
    }
    public function store(Request $request){
        $request->validate([
            'nama' => 'required|',
            'no hp' => 'required|',
            'alamat' => 'required|',
        ]);

        DB::table('profile')-> insert([
            'nama_lengkap'=> $request->nama,
            'no_hp'=> $request->nohp,
            'alamat'=> $request->alamat,
        ]);

        return redirect('/pelanggan'); 
    }
}
