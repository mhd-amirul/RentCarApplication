@extends('layouts.main')

@section('container')
<div class="card mb-3 mt-2 bg-secondary text-white"><div class="card-body p-2"><h6 class="card-title m-0">Menu</h5></div></div>
<div class="row justify-content-center">
    <div class="col-lg-2">
        <div class="card text-white bg-dark">
            <div class="card-body">
                <div class="pt-1">
                    <a class="text-white fs-6" href="{{ route('dashboard.index') }}">
                        <i class="mr-2 bi bi-house"> Dashboard</i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-2">
        <div class="card text-white bg-secondary">
            <div class="card-body">
                <div class="pt-1">
                    <a class="text-white fs-6" href="{{ route('allshops.create') }}">
                        <i class="mr-2 bi bi-plus-circle"> Add Shop</i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-2">
        <div class="card text-white bg-primary">
            <div class="card-body">
                <div class="pt-1">
                    <a class="text-white fs-6" href="{{ route('allusers.index') }}">
                        <i class="mr-2 bi bi-person-fill"> Pengguna</i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-2">
        <div class="card text-white bg-warning">
            <div class="card-body">
                <div class="pt-1">
                    <a class="text-white fs-6" href="{{ route('allkriteria.index') }}">
                        <i class="mr-2 bi bi-card-list"> Kriteria</i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-2">
        <div class="card text-white bg-success">
            <div class="card-body">
                <div class="pt-1">
                    <a class="text-white fs-6" href="{{ route('allalternatif.index') }}">
                        <i class="mr-2 bi bi-blockquote-right"> Alternatif</i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card mb-3 mt-2 bg-secondary text-white">
    <div class="card-body p-2">
        <h6 class="card-title m-0">Toko : </h5>
    </div>
</div>

<form action="{{ route('allshops.index') }}">
    <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="search.." name="searchShop" value="{{ request('searchShop') }}">
    <button class="btn btn-secondary" type="submit">Search</button>
</div>
</form>

@if ($shop->count())
<div class="container">
    <div class="row">
        @foreach( $shop as $shop )
            <div class="col-md-3 mb-3">
                <div class="card">
                    @if ($shop->pas_foto)
                        <div style="max-height: 166px; overflow: hidden;" class="bg-dark">
                            <img src="{{ asset('storage/' . $shop->pas_foto) }}" alt="" class="img-fluid">
                        </div>
                    @else
                        <img src="{{ url('images/notfound.png') }}" alt="null" class="card-img-top">
                    @endif
                    <div class="card-body">
                        <p class="card-text">
                            ID : {{ $shop->id }} <br>
                            Name Pemilik : {{ $shop->nm_pu }} <br>
                            Name Usaha : {{ $shop->nm_usaha }} <br>
                            Created At : {{ $shop->created_at }}
                        </p>
                        <a href="{{ route('allshops.show',$shop->id) }}" class="btn-sm btn-primary"><i class="bi bi-eye-fill" style="color: rgb(0, 0, 0);"></i></a>
                        <a href="{{ route('allshops.edit', $shop->id) }}" class="btn-sm btn-warning"><i class="bi bi-pencil-square" style="color: rgb(0, 0, 0);"></i></a>
                        <form action="{{ route('allshops.destroy', $shop->id) }}" method="post" class="d-inline">
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
    <p class="text-center fs-4 mt-5 mb-5">Data tidak ditemukan!</p>
@endif
@endsection
