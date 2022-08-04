@extends('layouts.main')

@section('container')

{{-- MENAMPILKAN HASIL REKOMENDASI --}}
<h2 class="text-center mt-5">HASIL REKOMENDASI</h2>
<h2 class="m-b-20 p-b-5 b-b-default mt-3"></h2>
<div class="container">
    <div class="row justify-content-start">
        @forelse( $cars as $car )
            @if ($loop->first)
            <div class="row justify-content-center">
                <div class="col-sm-12 ml-4">
                    <div class="card mb-3 text-center">
                        <div style="max-height: 350px; overflow: hidden;" class="bg-dark">
                            <img src="{{ isset($car->gambar1) == null ? url('images/notfound.png') : asset('storage/' . $car->gambar1) }}" alt="" class="img-fluid">
                        </div>

                        <div class="card-body">
                            <h4 class="card-title">Ranking {{ $loop->iteration }}</h4>
                            <h3 class="card-title">Merk : {{ $car->merk->nama }}</h3>
                            <p>
                                <small>
                                    <a href="{{ route('profileToko', $car->shop->slug) }}" class="text-decoration-none">{{ $car->shop->nm_usaha }}</a> {{ $car->created_at->diffForHumans() }}
                                </small>
                            </p>
                            <div class="row justify-content-center">
                                <div class="col-sm-5">
                                    <p class="card-text">Tahun Produksi : {{ $car->tahun_produksi->nama }}, Muatan Penumpang : {{ $car->muatan_penumpang->nama }}, Harga Sewa : {{ $car->harga_sewa->nama }}</p>
                                    <a href="{{ route('detailMobil', $car->slug) }}" class="btn btn-sm btn-primary w-100">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
                <div class="col-sm-4 mb-3">
                    <div class="card">
                        <img src="{{ isset($car->gambar1) == null ? url('images/notfound.png') : asset('storage/' . $car->gambar1) }}" alt="{{ $car->merk->nama }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Ranking {{ $loop->iteration }}</h5>
                            <h4 class="card-title">Merk : {{ $car->merk->nama }}</h4>
                            <p>
                                <small>
                                    <a href="{{ route('profileToko', $car->shop->slug) }}" class="text-decoration-none">{{ $car->shop->nm_usaha }}</a>
                                    {{ $car->created_at->diffForHumans() }}
                                </small>
                            </p>
                            <p class="card-text">Tahun Produksi : {{ $car->tahun_produksi->nama }}, Muatan Penumpang : {{ $car->muatan_penumpang->nama }}, Harga Sewa : {{ $car->harga_sewa->nama }}</p>
                            <a href="{{ route('detailMobil', $car->slug) }}" class="btn btn-sm btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            @endif
        @empty
            <h1 class="text-center mt-2" style="margin-bottom: 7cm">MOBIL TIDAK DITEMUKAN</h1>
        @endforelse
    </div>
</div>
@endsection
