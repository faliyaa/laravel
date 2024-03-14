@extends('layouts.admin')
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
<div class="col-lg-6 mb-4">

    <div class="card shadow mb-4">
    <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Buku 1</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img src="https://id-test-11.slatic.net/p/5996293cc12bec89b0f1294b89c14e1f.jpg" class="img-fluid" style="width: 150px; height: 200px;" alt="Buku 1">
                    </div>
                    <p>Judul: Belajar Matematika</p>
                    <p>Penulis: Udin KiloMeter</p>
                    <p>Tahun Terbit: 2023</p>
                    <p>ISBN: 978-1234567890</p>
                </div>
    </div>

</div>

<div class="col-lg-6 mb-4">

<div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Buku 2</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//catalog-image/99/MTA-150265376/no_brand_buku_lks_seni_rupa_kelas_2_sd-mi_kurikulum_merdeka_semester_2_full01_fdg0bl1t.jpg" class="img-fluid" style="width: 150px; height: 200px;" alt="Buku 2">
                    </div>
                    <p>Judul: Dasar Seni Rupa</p>
                    <p>Penulis: Zaroh</p>
                    <p>Tahun Terbit: 2022</p>
                    <p>ISBN: 978-0987654321</p>
                </div>
            </div>
</div>
@endsection
