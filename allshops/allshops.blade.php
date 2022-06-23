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

@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }} 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if ($shop->count())
<div class="container">
    <div class="row">
        @foreach( $shop as $shop )
            <div class="col-md-3 mb-3">
                <div class="card">
                    @if ($shop->pas_foto)
                        <img src="{{ asset('storage/' . $shop->pas_foto) }}" alt="{{ $shop->pas_foto }}" class="card-img-top">
                    @else
                        <img src="{{ url('images/notfound.png') }}" alt="null" class="card-img-top">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $shop->nm_usaha }}</h5>
                        <p>
                            <small>
                                Nama Usaha : <a href="#" class="text-decoration-none text-black">{{ $shop->nm_usaha }}</a>
                            </small>
                        </p>
                        <p class="card-text">
                            ID : {{ $shop->id }} <br> Name Pemilik : {{ $shop->nm_pu }} <br> Created At : {{ $shop->created_at }}
                        </p>
                        <a href="{{ route('allshops.show',$shop->id) }}" class="btn-sm btn-primary"><i class="bi bi-eye-fill" style="color: rgb(0, 0, 0);"></i></a>
                        
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
    <p class="text-center fs-4 mt-5 mb-5">Empty !!!</p>
@endif

{{-- <table class="table table-hover">
    <thead>
        <tr >
            <th scope="col">ID</th>
            <th scope="col">Name Pemilik</th>
            <th scope="col">Nama Usaha</th>
            <th scope="col">alamat</th>
            <th scope="col">Created At</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($shop as $shop)
        <tr >
            <th scope="row">{{ $shop->id }}</th>
            <td>{{ $shop->nm_pu }}</td>
            <td>{{ $shop->nm_usaha }}</td>
            <td>{{ $shop->alamat }}</td>
            <td>{{ $shop->created_at }}</td>
            <td>
                <a href="{{ route('allshops.show', $shop->id) }}" class="btn-sm btn-info" style="color: rgb(0, 0, 0);"><i class="bi bi-eye-fill"></i></a>
                <form action="{{ route('allshops.destroy', $shop->id ) }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn-sm btn-danger border-0" style="color: rgb(0, 0, 0);" onclick="return confirm('Yakin?')">
                        <i class="bi bi-trash-fill"></i>
                    </button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" class="text-center h3">DATA KOSONG</td>
        </tr>
        @endforelse
        </tbody>
</table> --}}
@endsection