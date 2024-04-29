<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Buku;


class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        return view('admin.pages.buku.index', compact('buku'));
    }

    public function show($id) {
        $buku = Buku::find($id);
        return view('admin.pages.buku.edit', compact('buku'));
    }

    public function create() {
        return view('admin.pages.buku.tambah');
    }

    public function store(Request $requests) {

        $data = $requests->except('_token', '_method');

        $requests->validate([
            'jenis_buku' => 'required|',
            'judul_buku' => 'required|',
            'pengarang' => 'required|',
            'penerbit' => 'required|',
            'tahun_terbit' => 'required|',
            'isbn' => 'required|',
            'url_gambar' => 'image|mimes:jpeg,jpg,png',
        ]);


        $images = $requests->url_gambar;
        $getNameImages = Str::random(15).$images->getClientOriginalName();
        $images->storeAs('public/gambarbuku', $getNameImages);

        $data['url_gambar'] = $getNameImages;
        Buku::create($data);

        // Buku::create([
        //     'jenis_buku' => $requests->jenis_buku,
        //     'judul_buku' => $requests->judul_buku,
        //     'pengarang' => $requests->pengarang,
        //     'penerbit' => $requests->penerbit,
        //     'tahun_terbit' => $requests->tahun_terbit,
        //     'url_gambar' => $requests->url_gambar,
        //     'created_at' => now(),
        //     'updated_at' =>now()
        // ]);

        return redirect()->route('admin.buku')->with(['berhasil' => 'Data Berhasil Ditambah']);
    }

}
