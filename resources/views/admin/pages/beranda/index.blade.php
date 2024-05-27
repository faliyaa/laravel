@extends('admin.pages.components.layouts.admin')
@section('judul', 'Dashboard')
@section('content')


    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Beranda</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Content Column -->

            @forelse ($buku as $key)
                <div class="col-lg-6 mb-4">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Buku {{ $loop->iteration }}</h6>
                        </div>
                        <div class="card-body">
                            <div class="text-center" style="padding-bottom: 40px">
                                <img src="storage/{{ $key->url_gambar }}" class="img-fluid"
                                {{-- {{ asset('storage/gambarbuku/' . $key->url_gambar) }} --}}
                                    style="width: 150px; height: 200px; border-radius: 4px;
                                    box-shadow: 8px 8px 4px;"
                                    alt="Buku 1">
                            </div>
                            <h3 class="text-center" style="font-weight: bold">INFORMASI BUKU</h3>
                            <p>Jenis Buku: {{ $key->jenis_buku }}</p>
                            <p>Judul Buku: {{ $key->judul_buku }}</p>
                            <p>Pengarang: {{ $key->pengarang }}</p>
                            <p>Penerbit: {{ $key->penerbit }}</p>
                            <p>Tahun Terbit: {{ $key->tahun_terbit }}</p>
                            <p>ISBN: {{ $key->isbn }}</p>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        @endsection
