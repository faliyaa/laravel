@extends('layouts.admin')

@section('table')

<div class="p-3">
    {{-- Kelola Profile Pelanggan --}}
        <a href="/tambahanggota" class="btn btn-primary my-3">Tambah Data Anggota</a> 
        {{-- Kelola user / Pengguna Pelanggan --}}
      
    
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Nomor Telepon</th>
                </tr>
            </thead>
    
            <tbody>
                @forelse ($anggota as $key => $value)
                <tr>
                    <th scope="row">{{$key + 1}}</th>
                    <td>{{$value->nama}}</td> 
                    <td>{{ $value->tempat_lahir}}</td>
                    <td>{{ $value->alamat}}</td>
                    <td class="mr-3">
                        <a href="/pelanggan/{{$value->id}}" class="btn btn-info" >Show </a> 
                        <a href="/pelanggan/{{$value->id}}/edit" class="btn btn-success">Edit</a>
                        <a href="/pelanggan/ {{$value->id }}" class="btn btn-danger" data-confirm-delete="true">Delete</a>
                    </td>
    </div>
    </tr>
    {{--tidak ada data  --}}
    </tbody>
    @empty
    <tr colspan="6">
        <td>No data</td>
    </tr>
    @endforelse
    </table>
    </div>
@endsection