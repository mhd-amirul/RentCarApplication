@extends('layouts.main')

@section('container')
<div class="row justify-content-center mt-3 mb-3">
    <div class="col-lg-8">
        <div class="card user-card-full">
            <div class="col">
                <div class="card-block">
                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Toko : </h6>
                    <div class="d-flex justify-content-center">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner m-2" style="max-height: 450px; max-width: 450px; overflow: hidden;">
                                <div class="carousel-item active">
                                    <img src="{{ isset($car->gambar1) == null ? url('images/notfound.png') : asset('storage/' . $car->gambar1) }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ isset($car->gambar2) == null ? url('images/notfound.png') : asset('storage/' . $car->gambar1) }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ isset($car->gambar3) == null ? url('images/notfound.png') : asset('storage/' . $car->gambar1) }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ isset($car->gambar4) == null ? url('images/notfound.png') : asset('storage/' . $car->gambar1) }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ isset($car->gambar5) == null ? url('images/notfound.png') : asset('storage/' . $car->gambar1) }}" class="d-block w-100" alt="...">
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
                            <p class="m-b-10 f-w-600">Merk</p>
                            <h6 class="text-muted f-w-400">{{ $car->merk->nama }}</h6>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <p class="m-b-10 f-w-600">Tahun Produksi</p>
                            <h6 class="text-muted f-w-400">{{ $car->tahun_produksi->nama }}</h6>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <p class="m-b-10 f-w-600">Muatan Penumpang</p>
                            <h6 class="text-muted f-w-400">{{ $car->muatan_penumpang->nama }}</h6>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <p class="m-b-10 f-w-600">Kapasitas Mesin</p>
                            <h6 class="text-muted f-w-400">{{ $car->kapasitas_mesin->nama }}</h6>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <p class="m-b-10 f-w-600">Kondisi Mesin</p>
                            <h6 class="text-muted f-w-400">{{ $car->kondisi_mesin->nama }}</h6>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <p class="m-b-10 f-w-600">Kondisi Fisik</p>
                            <h6 class="text-muted f-w-400">{{ $car->kondisi_fisik->nama }}</h6>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <p class="m-b-10 f-w-600">Jenis BBM</p>
                            <h6 class="text-muted f-w-400">{{ $car->jenis_bbm->nama }}</h6>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <p class="m-b-10 f-w-600">Harga Sewa</p>
                            <h6 class="text-muted f-w-400">{{ $car->harga_sewa->nama }}</h6>
                        </div>
                        <div class="row">
                            <div class="col-sm-9 mt-5">
                                <a href="{{ route('allcars.edit', $car->id) }}" class="btn btn-warning">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                                <form action="{{ route('allcars.destroy', $car->id) }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class=" ml-2 btn btn-danger border-0" style="color: rgb(0, 0, 0);" onclick="return confirm('Yakin Ingin Menghapus?')">
                                        <i class="bi bi-trash-fill"></i> Hapus
                                    </button>
                                </form>
                                <a href="/allcars" class="ml-2 btn btn-success">
                                    <i class="mr-2 bi bi-house-fill" style="color: rgb(0, 0, 0);"></i> Cek Lokasi Toko
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection