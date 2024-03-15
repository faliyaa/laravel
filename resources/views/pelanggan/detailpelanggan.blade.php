@extends('layouts.admin')
@section('judul', 'Detail Pelanggan')

@section('content')
    <div class="p-3">
        {{-- Informasi Anggota --}}
        <div class="card">
            <div class="card-header">
                Detail Anggota
            </div>
            <div class="card-body">
                <h5 class="card-title">Nama: {{$anggota->nama}}</h5>
                <p class="card-text">Tempat Lahir: {{$anggota->tempat_lahir}}</p>
                <p class="card-text">Tanggal Lahir: {{$anggota->tanggal_lahir}}</p>
                <p class="card-text">Gender: {{$anggota->gender}}</p>
                <p class="card-text">Alamat: {{$anggota->alamat}}</p>
                <p class="card-text">Nomor Telepon: {{$anggota->nomor_telepon}}</p>
                {{-- Tambahkan tombol untuk kembali ke halaman sebelumnya --}}
                <a href="{{url()->previous()}}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
@endsection
