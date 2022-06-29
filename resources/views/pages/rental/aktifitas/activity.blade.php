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
    <div class="col-sm-4">
        <a href="{{ route('activityAdd',$shop->id) }}" class="btn btn-primary"><i class="bi bi-file-earmark-plus"></i> Add Activity</a>
        <a target="blank" href="{{ route('activityViewCetak', $shop->id) }}" class="btn btn-success"><i class="bi bi-printer-fill"></i>  Print</a>
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
            @forelse ($histories as $h)
                <tr>
                    <td>{{ $h->id }}</td>
                    <td>{{ $h->nama_pinjam }}</td>
                    <td>{{ $h->nik_pinjam }}</td>
                    <td>{{ $h->tgl_pinjam }}</td>
                    <td>{{ $h->batas_pinjam }}</td>
                    <td>
                        <a target="blank" href="{{ isset($h->berkas_pinjam) == null ? url('images/notfound.png') : asset('storage/' . $h->berkas_pinjam) }}" class="btn-sm btn-info">
                            Lihat <i class="bi bi-eye" style="color: rgb(255, 255, 255);"></i>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('shop.show', $h->car_id) }}" class="btn-sm btn-info">
                            Lihat <i class="bi bi-eye" style="color: rgb(255, 255, 255);"></i>
                        </a>
                    </td>

                </tr>
            @empty
                <tr>
                    <td colspan="8" class="text-center h3">DATA KOSONG</td>
                </tr>
            @endforelse
            </tbody>
    </table>
</div>
@endsection
