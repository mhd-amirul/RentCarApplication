@extends('layouts.main')

@section('container')
<div class="row">
    <div class="col-sm-12">
        <div class="card mb-2 mt-2 bg-secondary text-white">
            <div class="card-body p-2">
                <h6 class="card-title m-0">Opsi :</h5>
            </div>
        </div>
    </div>
    <div class="col-sm-4 justify-content-start">
        <a href="" class="btn btn-primary">Add Aktivity</a>
    </div>
    <div class="col-sm-12">
        <div class="card mb-3 mt-2 bg-secondary text-white">
            <div class="card-body p-2">
                <h6 class="card-title m-0">Aktifitas Toko :</h5>
            </div>
        </div>
    </div>
    <table class="table table-hover">
        <thead>
            <tr >
                <th scope="col">ID</th>
                <th scope="col">Nama Peminjam</th>
                <th scope="col">NIK</th>
                <th scope="col">Tgl Peminjaman</th>
                <th scope="col">batas Peminjaman</th>
                <th scope="col">berkas file</th>
                <th scope="col">Data Mobil</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td colspan="8" class="text-center h3">DATA KOSONG</td>
            </tr>
            </tbody>
    </table>
</div>
@endsection
