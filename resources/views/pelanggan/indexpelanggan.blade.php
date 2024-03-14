@extends('layouts.admin')
@section('judul', 'Dashboard')

@section('content')


    <div class="container">
        <div class="p-3">
            <h1>Data Pelanggan</h1>
            <a href="/tambahpelanggan" class="btn btn-primary mb-3">Tambah Data Pelanggan</a>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">No HP</th>
                        <th scope="col">Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($anggotas as $anggota)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $anggota->nama_anggota }}</td>
                            <td>{{ $anggota->tgl_lahir }}</td>
                            <td>{{ $anggota->alamat }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('additional_scripts')
    <script src="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example1').DataTable();
            $('#example2').DataTable();
        });
    </script>
@endsection
