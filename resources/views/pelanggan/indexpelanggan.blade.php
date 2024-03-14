@extends('layouts.admin')
@section('judul', 'Dashboard')

@section('dashboard')


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
                <tr>
                    <td>1</td>
                    <td>Budi Santoso</td>
                    <td>08123456789</td>
                    <td>Jl. Merdeka No. 12, Semarang</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ani Lestari</td>
                    <td>08987654321</td>
                    <td>Jl. Sudirman No. 17, Semarang</td>
                </tr>
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
