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
                <div class="carousel-inner m-2" style="max-height: 450px; max-width: 450px; overflow: hidden;">
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
                    <input type="text" class="form-control rounded-top" id="nm_pu" value="+62 {{ $shop->user->no_hp }}">
                    <label for="nm_pu">No Hp</label>
                </div>
            </div>
            <div class="col-sm-6 mb-4">
                <p class="m-b-10 f-w-600">Surat Izin Usaha</p>
                <a target="blank" href="{{ isset($shop->img_siu) == null ? url('images/notfound.png') : asset('storage/' . $shop->img_siu) }}" class="btn-sm btn-info"><i class="bi bi-eye-fill" style="color: rgb(0, 0, 0);"></i></a>
            </div>
            
            <div class="row">
                <div class="col-sm-9 mt-5">
                    <a href="{{ route('sharelok', $shop->id) }}" class="ml-2 btn btn-success">
                        <i class="mr-2 bi bi-house-fill" style="color: rgb(0, 0, 0);"></i> Cek Lokasi Toko
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card mb-3 mt-2 bg-secondary text-white"><div class="card-body p-2"><h6 class="card-title m-0">Daftar Mobil :</h5></div></div>
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
        @forelse ($car as $car)
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
                <a href="{{ route('detailMobil', $car->id) }}" class="btn-sm btn-info"><i class="bi bi-eye-fill" style="color: rgb(0, 0, 0);"></i></a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="7" class="text-center h3">DATA KOSONG</td>
        </tr>
        @endforelse
        </tbody>
</table>
@endsection