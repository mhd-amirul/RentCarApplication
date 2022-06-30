@extends('layouts.main')

@section('container')
<h1 class="mt-5 mb-3 text-center">DAFTAR MOBIL</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <form action="{{ route('daftar') }}">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="search.." name="search" value="{{ request('search') }}">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </form>
    </div>
    <div class="col-md-12">
        <div class="card px-1 bg-danger">
            <h1></h1>
        </div>
    </div>
</div>

@if ($cars->count())
<div class="container">
    <div class="row">
        @foreach( $cars as $car )
            <div class="col-sm-3 mb-3">
                <div class="card">
                    <img src="{{ isset($car->gambar1) == null ? url('images/notfound.png') : asset('storage/' . $car->gambar1) }}" alt="{{ $car->merk->nama }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $car->merk->nama }}</h5>
                        <p>
                            <small>
                                Usaha : <a href="{{ route('profileToko', $car->shop->id) }}" class="text-decoration-none text-black">{{ $car->shop->nm_usaha }}</a>
                            </small>
                        </p>
                        <p class="card-text">Merk : {{ $car->merk->nama }}, Tahun Produksi : {{ $car->tahun_produksi->nama }}, Muatan Penumpang : {{ $car->muatan_penumpang->nama }}, Harga Sewa : {{ $car->harga_sewa->nama }}</p>
                        <a href="{{ route('detailMobil', $car->id) }}" class="btn btn-sm btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@else
    <p class="text-center fs-4 mt-5">Ops!!! Pencarian Tidak Ditemukan</p>
@endif

<div class="d-flex justify-content-center">
    {{ $cars->links() }}
</div>
@endsection
