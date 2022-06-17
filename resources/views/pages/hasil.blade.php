@extends('layouts.main')

@section('container')

{{-- MENAMPILKAN HASIL REKOMENDASI --}}
<div class="card px-2 bg-secondary text-white">
    <div class="card-body p-2">
        <h6 class="card-title m-0">Hasil Rekomendasi :</h5>
    </div>
</div>
<div class="container">
    <div class="row">
        @forelse( $cars as $car )
            @if ($loop->first)
                <div class="card mb-3 text-center">
                    <div style="max-height: 350px; overflow: hidden;">
                        <img src="{{ isset($car->gambar1) == null ? url('images/notfound.png') : asset('storage/' . $car->gambar1) }}" alt="" class="img-fluid">
                    </div>
                    
                    <div class="card-body">
                        <h3 class="card-title">{{ $car->merk->nama }}</h3>
                        <h4 class="card-title">Rank : {{ $loop->iteration }}</h4>
                        <p>
                            <small>
                                By : <a href="{{ route('profileToko', $car->shop->id) }}" class="text-decoration-none">{{ $car->shop->nm_usaha }}</a> {{ $car->created_at->diffForHumans() }}
                            </small>
                        </p>
                        <p class="card-text">Merk : {{ $car->merk->nama }}, Tahun Produksi : {{ $car->tahun_produksi->nama }}, Muatan Penumpang : {{ $car->muatan_penumpang->nama }}, Harga Sewa : {{ $car->harga_sewa->nama }}</p>
                        <a href="{{ route('detailMobil', $car->id) }}" class="btn btn-secondary">Detail</a>
                    </div>
                </div>
            @else
                <div class="col-sm-3 mb-3">
                    <div class="card">
                        <img src="{{ isset($car->gambar1) == null ? url('images/notfound.png') : asset('storage/' . $car->gambar1) }}" alt="{{ $car->merk->nama }}" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title">{{ $car->merk->nama }}</h4>
                            <h5 class="card-title">Rank : {{ $loop->iteration }}</h5>
                            <p>
                                <small>
                                    Usaha : <a href="{{ route('profileToko', $car->shop->id) }}" class="text-decoration-none text-black">{{ $car->shop->nm_usaha }}</a>
                                </small>
                            </p>
                            <p class="card-text">Merk : {{ $car->merk->nama }}, Tahun Produksi : {{ $car->tahun_produksi->nama }}, Muatan Penumpang : {{ $car->muatan_penumpang->nama }}, Harga Sewa : {{ $car->harga_sewa->nama }}</p>
                            <a href="{{ route('detailMobil', $car->id) }}" class="btn btn-secondary">Detail</a>
                        </div>
                    </div>
                </div>
            @endif
        @empty
            <h1 class="text-center mt-2" style="margin-bottom: 7cm">MOBIL YANG COCOK TIDAK DITEMUKAN</h1>
        @endforelse
    </div>
</div>

{{-- <table class="table table-hover" style="margin-bottom: 7cm">
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
            <td colspan="7" class="text-center h3"></td>
        </tr>
        @endforelse
        </tbody>
</table> --}}

@endsection
