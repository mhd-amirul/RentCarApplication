@extends('layouts.main')

@section('container')
<div class="row justify-content-center mt-3">
    <div class="col-lg-8">
        <div class="card user-card-full">
            <div class="col">
                <div class="card-block">
                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Toko : <a href="/profileToko" class="text-black">{{ $car->shop->nm_usaha }}</a></h6>
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
                        <div class="col-sm-6 mb-4">
                            <p class="m-b-10 f-w-600">Stok</p>
                            <h6 class="text-muted f-w-400">{{ isset($car->stok) == null ? 0 : $car->stok }}</h6>
                        </div>
                        <div class="row">
                            <p class="m-b-10 f-w-600">Deskripsi</p>
                            <div class="col-sm-6 mb-4">
                                <article class="text-muted f-w-400">
                                    @if ($car->deskripsi)
                                        {!! $car->deskripsi !!}        
                                    @else
                                        {!! 'Deskripsi Tidak Tersedia' !!}
                                    @endif
                                </article>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-9 mt-5">
                                <a href="{{ route('shop.edit', $car->id) }}" class="btn btn-warning">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                                <form action="{{ route('shop.destroy', $car->id) }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class=" ml-2 btn btn-danger border-0" style="color: rgb(0, 0, 0);" onclick="return confirm('Yakin Ingin Menghapus?')">
                                        <i class="bi bi-trash-fill"></i> Hapus
                                    </button>
                                </form>
                                <a href="/lokasi/user/{{ $car->shop->id }}" class="ml-2 btn btn-success">
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
<div class="row justify-content-center mb-3">
    <div class="col-lg-8">
        <div class="card user-card-full">
            <div class="col">
                <div class="card-block">
                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Rating : </h6>
                    @if ($review)
                        <div class="pd-rating">
                            @if ($rating >= 1)
                                <i class="bi bi-star-fill"></i>
                            @elseif ($rating >= 0.5)
                                <i class="bi bi-star-half"></i>
                            @else
                                <i class="bi bi-star"></i>
                            @endif

                            @if ($rating >= 2)
                                <i class="bi bi-star-fill"></i>
                            @elseif ($rating >= 1.5)
                                <i class="bi bi-star-half"></i>
                            @else
                                <i class="bi bi-star"></i>
                            @endif

                            @if ($rating >= 3)
                                <i class="bi bi-star-fill"></i>
                            @elseif ($rating >= 2.5)
                                <i class="bi bi-star-half"></i>
                            @else
                                <i class="bi bi-star"></i>
                            @endif

                            @if ($rating >= 4)
                                <i class="bi bi-star-fill"></i>
                            @elseif ($rating >= 3.5)
                                <i class="bi bi-star-half"></i>
                            @else
                                <i class="bi bi-star"></i>
                            @endif

                            @if ($rating >= 5)
                                <i class="bi bi-star-fill"></i>
                            @elseif ($rating >= 4.5)
                                <i class="bi bi-star-half"></i>
                            @else
                                <i class="bi bi-star"></i>
                            @endif
                            <span>{{ $rating }}</span>
                            <small class="text-black f-w-600">of {{ $review }} review</small>
                        </div>
                    @else
                        <div class="pd-rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <span>5</span>
                            <small class="text-black f-w-600">of 0 review</small>
                        </div>
                    @endif
                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600 mt-4">Comment :</h6>
                    @forelse ($ulasan as $ulas)
                        <div class="d-flex flex-row user-info">
                            <img class="rounded-circle" src="{{ isset($ulas->user->image) == null ? url('images/notfound.png') : asset('storage/' . $ulas->user->image) }}" width="40">
                            <div class="d-flex flex-column justify-content-start ml-2">
                                <span class="d-block font-weight-bold name">{{ $ulas->user->username }}</span>
                                <span class="date text-black-50">{{ $ulas->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                        <div class="mt-2 ml-2">
                            <p class="comment-text">{{ $ulas->komentar }}</p>
                        </div>
                    @empty
                        <div class="mt-2 ml-2">
                            <p class="comment-text text-center">Belum Ada Komentar</p>
                        </div>
                    @endforelse
                    <h6 class="b-b-default"></h6>
                    <a href="{{ route('ulasan', $car->id) }}" class="btn btn-primary">
                        <i class="mr-2 bi bi-pencil-square" style="color: rgb(0, 0, 0);"></i> Ulasan
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection