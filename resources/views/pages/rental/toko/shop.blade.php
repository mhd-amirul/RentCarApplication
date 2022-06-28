@extends('layouts.main')

@section('container')
<div class="card mb-3 mt-2 bg-secondary text-white">
    <div class="card-body p-2">
        <h6 class="card-title m-0">Informasi Toko :</h5>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-center">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner m-2" style="max-height: 400px; max-width: 400px; overflow: hidden;">
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
        <h6 class="m-b-20 p-b-5 b-b-default f-w-600 mt-5">Information :</h6>
        <div class="row">
            <div class="col-sm-6 mb-4">
                <div class="form-floating">
                    <input type="text" class="form-control rounded-top" id="nm_pu" value="{{ $shop->nm_pu }}">
                    <label for="nm_pu">Nama Pemilik</label>
                </div>
            </div>
            <div class="col-sm-6 mb-4">
                <div class="form-floating">
                    <input type="text" class="form-control rounded-top" id="nm_pu" value="{{ $shop->nm_usaha }}">
                    <label for="nm_pu">Nama Usaha</label>
                </div>
            </div>
            <div class="col-sm-6 mb-4">
                <div class="form-floating">
                    <input type="text" class="form-control rounded-top" id="nm_pu" value="{{ $shop->alamat }}">
                    <label for="nm_pu">Alamat</label>
                </div>
            </div>
            <div class="col-sm-6 mb-4">
                <div class="form-floating">
                    <input type="text" class="form-control rounded-top" id="nm_pu" value="{{ $shop->nik }}">
                    <label for="nm_pu">NIK</label>
                </div>
            </div>
            <div class="col-sm-6 mb-4">
                <div class="form-floating">
                    <input type="text" class="form-control rounded-top" id="nm_pu" value="{{ auth()->user()->username }}">
                    <label for="nm_pu">Username</label>
                </div>
            </div>
            <div class="col-sm-6 mb-4">
                <div class="form-floating">
                    <input type="text" class="form-control rounded-top" id="nm_pu" value="+62 {{ auth()->user()->no_hp }}">
                    <label for="nm_pu">No Hp</label>
                </div>
            </div>
            <div class="col-sm-6 mb-4">
                <p class="m-b-10 f-w-600">Surat Izin Usaha</p>
                <div style="max-height: 250px; overflow: hidden;">
                    <img src="{{ isset($shop->img_siu) == null ? url('images/notfound.png') : asset('storage/' . $shop->img_siu) }}" alt="#" class="img-fluid">
                </div>
                <div class="card-img-overlay d-flex align-items-center p-0">
                    <a target="blank" href="{{ isset($shop->img_siu) == null ? url('images/notfound.png') : asset('storage/' . $shop->img_siu) }}" class="card-title text-center flex-fill p-4 fs-3 text-white text-decoration-none" style="background-color: rgba(0,0,0,0.7 )">Detail</a>
                </div>
            </div>
            <div class="col-sm-6 mb-4">
                <p class="m-b-10 f-w-600">KTP</p>
                <div style="max-height: 250px; overflow: hidden;">
                    <img src="{{ isset($shop->img_ktp) == null ? url('images/notfound.png') : asset('storage/' . $shop->img_ktp) }}" alt="#" class="img-fluid">
                </div>
                <div class="card-img-overlay d-flex align-items-center p-0">
                    <a target="blank" href="{{ isset($shop->img_ktp) == null ? url('images/notfound.png') : asset('storage/' . $shop->img_ktp) }}" class="card-title text-center flex-fill p-4 fs-3 text-white text-decoration-none" style="background-color: rgba(0,0,0,0.7 )">Detail</a>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-9 mt-5">
                    <a href="{{ route('toko.edit', $shop->id) }}" class="btn btn-warning">
                        <i class="bi bi-pencil-square"></i> Edit Toko
                    </a>
                    @if ($shop->longitude != null && $shop->latitude != null)
                        <a href="{{ route('sharelok', $shop->id) }}" class="ml-2 btn btn-success">
                            <i class="mr-2 bi bi-house-fill" style="color: rgb(0, 0, 0);"></i> Cek Lokasi Toko
                        </a>
                        <a href="{{ route('setLocation', $shop->id) }}" class="ml-2 btn btn-primary">
                            <i class="mr-2 bi bi-map-fill" style="color: rgb(0, 0, 0);"></i> Edit Lokasi Toko
                        </a>
                    @else
                        <a href="{{ route('setLocation', $shop->id) }}" class="ml-2 btn btn-success">
                            <i class="mr-2 bi bi-map-fill" style="color: rgb(0, 0, 0);"></i> Atur Lokasi Toko
                        </a>
                    @endif
                    <a href="{{ route('activityView', $shop->id) }}" class="btn btn-dark text-white">
                        <i class="bi bi-activity"></i> Aktifitas
                    </a>
                    <form action="{{ route('toko.destroy', $shop->id) }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class=" ml-2 btn btn-danger border-0" style="color: rgb(0, 0, 0);" onclick="return confirm('Menghapus Toko Juga Dapat Menghapus Data Mobil, Yakin Ingin Melanjutkan?')">
                            <i class="bi bi-trash-fill"></i> Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card mb-3 mt-2 bg-secondary text-white"><div class="card-body p-2"><h6 class="card-title m-0">Daftar Mobil :</h5></div></div>

@if ($shop->longitude != null && $shop->latitude != null)
    <a href="{{ route('shop.create') }}" class="btn btn-primary mb-3">Tambah data mobil</a>
@else
    <p class="mb-2 mt-2"></p>
@endif

<form action="{{ route('toko.index') }}">
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="search.." name="search" value="{{ request('search') }}">
        <button class="btn btn-secondary" type="submit">Search</button>
    </div>
</form>

@if ($car->count())
<div class="container">
    <div class="row">
        @foreach( $car as $car )
            <div class="col-md-3 mb-3">
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
@endsection
