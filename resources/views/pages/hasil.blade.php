@extends('layouts.main')

@section('container')

{{-- MENAMPILKAN HASIL REKOMENDASI --}}
<div class="card px-2 bg-secondary text-white">
    <div class="card-body p-2">
        <h6 class="card-title m-0">Hasil Rekomendasi :</h5>
    </div>
</div>
<table class="table table-hover">
    <thead>
        <tr class="text-center">
            <th scope="col">No</th>
            <th scope="col">Gambar</th>
            <th scope="col">Merk</th>
            <th scope="col">Tahun Produksi</th>
            <th scope="col">Muatan Penumpang</th>
            <th scope="col">Harga Sewa</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($cars as $car)
        <tr class="text-center">
            <th scope="row">{{ $loop->iteration }}</th>
            <td>
                <img src="{{ isset($car->gambar1) == null ? url('images/notfound.png') : asset('storage/' . $car->gambar1) }}" height="50" width="100" alt="">
            </td>
            <td>{{ $car->merk->nama }}</td>
            <td>{{ $car->tahun_produksi->nama }}</td>
            <td>{{ $car->muatan_penumpang->nama }}</td>
            <td>{{ $car->harga_sewa->nama }}</td>
            <td>
                <a href="/detail/{{ $car->id }}" class="btn-sm btn-info"><i class="bi bi-eye-fill" style="color: rgb(0, 0, 0);"></i></a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="7" class="text-center h3">MOBIL YANG COCOK TIDAK DITEMUKAN</td>
        </tr>
        @endforelse
        </tbody>
</table>

@endsection
