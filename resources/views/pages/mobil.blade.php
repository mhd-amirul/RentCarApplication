@extends('layouts.main')

@section('container')
<h1 class="mb-5 text-center">{{ $title }}</h1>
<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="{{ route('daftar') }}">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="search.." name="search" value="{{ request('search') }}">
                <button class="btn btn-secondary" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>
<div class="card mt-2 mb-4 bg-secondary text-white text-left">
    <div class="card-body p-2">
        <h6 class="card-title m-0">Daftar Mobil : </h6>
    </div>
</div>

@if ($cars->count())
<div class="container">
    <div class="row">
        @foreach( $cars as $car )
            <div class="col-md-4 mb-3">
                <div class="card">
                    @if ($car->gambar1)
                        <img src="{{ asset('storage/' . $car->gambar1) }}" alt="{{ $car->merk->nama }}" class="img-fluid">
                    @else
                        <img src="{{ url('images/notfound.png') }}" alt="{{ $car->merk->nama }}" class="card-img-top">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $car->merk->nama }}</h5>
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