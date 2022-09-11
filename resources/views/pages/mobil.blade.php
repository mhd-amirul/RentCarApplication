@extends('layouts.main')

{{-- @section('container')
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
                                    Usaha : <a href="{{ route('profileToko', $car->shop->slug) }}" class="text-decoration-none text-black">{{ $car->shop->nm_usaha }}</a>
                                </small>
                            </p>
                            <p class="card-text">Merk : {{ $car->merk->nama }}, Tahun Produksi : {{ $car->tahun_produksi->nama }}, Muatan Penumpang : {{ $car->muatan_penumpang->nama }}, Harga Sewa : {{ $car->harga_sewa->nama }}</p>
                            <a href="{{ route('detailMobil', $car->slug) }}" class="btn btn-sm btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @else
        <p class="text-center fs-4" style="margin-bottom: 7cm;margin-top: 2cm">Ops!!! Pencarian Tidak Ditemukan</p>
    @endif

    <div class="d-flex justify-content-center">
        {{ $cars->links() }}
    </div>
@endsection --}}

@section('container')
<div class="row">
    <div class="col-lg-12">
        <div class="card px-5 pt-5">
            <h4 class="m-b-20 p-b-5 b-b-default f-w-600">Hasil rekomendasi mobil rental</h4>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card px-5 py-5">
            <table class="table table-responsive table-hover text-center">
                <thead>
                    <tr>
                        {{-- <th scope="col">Ranking</th> --}}
                        <th scope="col">ID</th>
                        {{-- <th scope="col">No Polisi</th> --}}
                        <th scope="col">Merk</th>
                        <th scope="col">Tahun</th>
                        <th scope="col">Konfisi Fisik</th>
                        <th scope="col">Kondisi Mesin</th>
                        <th scope="col">Seater</th>
                        <th scope="col">CC</th>
                        <th scope="col">Jenis BBM</th>
                        <th scope="col">Harga Sewa</th>
                        {{-- <th scope="col">Stok</th> --}}
                        {{-- <th scope="col">Action</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cars as $car)
                        <tr>
                            {{-- <th scope="row">{{ $car->ranking }}</th> --}}
                            <td>{{ $car->id }}</td>
                            {{-- <td>{{ $car->no_polisi }}</td> --}}
                            <td>{{ $car->merk->nama }}</td>
                            <td>{{ $car->tahun_produksi->nama }}</td>
                            <td>{{ $car->kondisi_fisik->nama }}</td>
                            <td>{{ $car->kondisi_mesin->nama }}</td>
                            <td>{{ $car->muatan_penumpang->nama }}</td>
                            <td>{{ $car->kapasitas_mesin->nama }}</td>
                            <td>{{ $car->jenis_bbm->nama }}</td>
                            <td>{{ "Rp. " . number_format($car->harga_sewa->nama,2,',','.') . '\hari' }}</td>
                            {{-- <td>{{ $car->stok }}</td> --}}
                            {{-- <td>
                                <a href="{{ route('detailMobil', $car->slug) }}" class="btn btn-sm btn-info">
                                    <i class="bi bi-eye-fill" style="color: rgb(0, 0, 0);"></i>
                                </a>
                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
