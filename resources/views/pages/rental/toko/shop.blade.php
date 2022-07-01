@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-9">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-center">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner m-2" style="max-height: 450px; max-width: 450px;">
                            <div class="carousel-item active">
                                <img src="{{ isset($shop->foto_usaha) == null ? url('images/notfound.png') : asset('storage/' . $shop->foto_usaha) }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ isset($shop->pas_foto) == null ? url('images/notfound.png') : asset('storage/' . $shop->pas_foto) }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                    </div>
                </div>
                <h6 class="m-b-20 p-b-5 b-b-default f-w-600 mt-5">INFORMASI TOKO</h6>
                <div class="row">
                    <div class="col-sm-6 mb-4">
                        <div class="form-floating">
                            <input type="text" class="form-control rounded-top" value="{{ $shop->nm_pu }}">
                            <label for="nm_pu">Nama Pemilik</label>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="form-floating">
                            <input type="text" class="form-control rounded-top" value="{{ $shop->nm_usaha }}">
                            <label for="nm_pu">Nama Usaha</label>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="form-floating">
                            <input type="text" class="form-control rounded-top" value="{{ $shop->alamat }}">
                            <label for="nm_pu">Alamat</label>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="form-floating">
                            <input type="text" class="form-control rounded-top" value="{{ $shop->nik }}">
                            <label for="nm_pu">NIK</label>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <p class="m-b-10 f-w-600">Surat Izin Usaha</p>
                        <div style="max-height: 200px; max-width: 376px; overflow: hidden;" class="border border-dark">
                            <img src="{{ isset($shop->img_siu) == null ? url('images/notfound.png') : asset('storage/' . $shop->img_siu) }}" alt="#" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <p class="m-b-10 f-w-600">KTP</p>
                        <div style="max-height: 200px; max-width: 376px; overflow: hidden;" class="border border-dark">
                            <img src="{{ isset($shop->img_ktp) == null ? url('images/notfound.png') : asset('storage/' . $shop->img_ktp) }}" alt="#" class="img-fluid">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 mt-5">
                            <a href="{{ route('toko.edit', $shop->id) }}" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil-square"></i> EDIT TOKO
                            </a>
                            @if ($shop->longitude != null && $shop->latitude != null)
                                <a href="{{ route('sharelok', $shop->id) }}" class="btn btn-sm btn-success">
                                    <i class="mr-2 bi bi-house-fill" style="color: rgb(0, 0, 0);"></i> LOKASI TOKO
                                </a>
                                <a href="{{ route('setLocation', $shop->id) }}" class="btn btn-sm btn-primary">
                                    <i class="mr-2 bi bi-map-fill" style="color: rgb(0, 0, 0);"></i> EDIT LOKASI TOKO
                                </a>
                            @else
                                <a href="{{ route('setLocation', $shop->id) }}" class="btn btn-sm btn-success">
                                    <i class="mr-2 bi bi-map-fill" style="color: rgb(0, 0, 0);"></i> SET LOKASI TOKO
                                </a>
                            @endif
                            <a href="{{ route('activityView', $shop->id) }}" class="btn btn-sm btn-dark text-white">
                                <i class="bi bi-activity"></i> AKTIFITAS
                            </a>
                            <form action="{{ route('toko.destroy', $shop->id) }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class=" btn btn-sm btn-danger border-0" style="color: rgb(0, 0, 0);" onclick="return confirm('Menghapus Toko Juga Dapat Menghapus Data Mobil, Yakin Ingin Melanjutkan?')">
                                    <i class="bi bi-trash-fill"></i> HAPUS TOKO
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-9">
        <h4>DAFTAR MOBIL</h4>
        <div class="card my-2 bg-danger"><h1></h1></div>
        @if ($shop->longitude != null && $shop->latitude != null)
            <a href="{{ route('shop.create') }}" class="btn btn-sm btn-primary mb-2">TAMBAH MOBIL</a>
        @else
            <p class="mb-21 mt-2"></p>
        @endif

        <form action="{{ route('toko.index') }}">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="search.." name="search" value="{{ request('search') }}">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </form>
    </div>
    <div class="col-lg-10">
        @if ($car->count())
        <div class="container">
            <div class="row">
                @foreach( $car as $car )
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="{{ isset($car->gambar1) == null ? url('images/notfound.png') : asset('storage/' . $car->gambar1) }}" alt="{{ $car->merk->nama }}" class="img-fluid">
                            <div class="card-body">
                                <h5 class="card-title">{{ $car->merk->nama }}</h5>
                                <p>
                                    <small>
                                        Usaha : <a href="{{ route('profileToko', $car->shop->id) }}" class="text-decoration-none text-black">{{ $car->shop->nm_usaha }}</a>
                                    </small>
                                </p>
                                <p class="card-text">Merk : {{ $car->merk->nama }}, Tahun Produksi : {{ $car->tahun_produksi->nama }}, Muatan Penumpang : {{ $car->muatan_penumpang->nama }}, Harga Sewa : {{ $car->harga_sewa->nama }}</p>
                                <a href="{{ route('shop.show', $car->id) }}" class="btn-sm btn-info"><i class="bi bi-eye-fill" style="color: rgb(0, 0, 0);"></i></a>
                                <a href="{{ route('shop.edit', $car->id) }}" class="btn-sm btn-warning"><i class="bi bi-pencil-square"></i></a>
                                <form action="{{ route('shop.destroy', $car->id) }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn-sm btn-danger border-0" style="color: rgb(0, 0, 0);" onclick="return confirm('Yakin Ingin Menghapus?')">
                                        <i class="bi bi-trash-fill"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        @else
            <p class="text-center fs-4 mt-5 mb-5">Mobil Tidak Ditemukan</p>
        @endif
        </div>
</div>
@endsection
