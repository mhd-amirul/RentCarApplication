@extends('layouts.main')

@section('container')
@if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }} 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
<div class="card mb-3 mt-2 bg-secondary text-white"><div class="card-body p-2"><h6 class="card-title m-0">Administrator : </h5></div></div>
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <div class="pt-1">
                        <a class="text-white fs-3" href="{{ route('allusers.index') }}">
                            <i class="mr-2 bi bi-person-fill"> Pengguna</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--/.col-->
        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-danger">
                <div class="card-body">
                    <div class="pt-1">
                        <a class="text-white fs-3" href="{{ route('allshops.index') }}">
                            <i class="mr-2 bi bi-house-fill"> Toko</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--/.col-->
        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-info">
                <div class="card-body">
                    <div class="pt-1">
                        <a class="text-white fs-3" href="{{ route('allkriteria.index') }}">
                            <i class="mr-2 bi bi-card-list"> Kriteria</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--/.col-->
        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-success">
                <div class="card-body">
                    <div class="pt-1">
                        <a class="text-white fs-3" href="{{ route('allalternatif.index') }}">
                            <i class="mr-2 bi bi-blockquote-right"> Alternatif</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="card mb-3 mt-2 bg-secondary text-white"><div class="card-body p-2"><h6 class="card-title m-0">Pendaftar Toko : </h5></div></div>
    <table class="table table-hover">
        <thead>
            <tr class="text-center">
                <th scope="col">User ID</th>
                <th scope="col">Nama Pemilik</th>
                <th scope="col">Nama Usaha</th>
                <th scope="col">Alamat</th>
                <th scope="col">NIK</th>
                <th scope="col">KTP</th>
                <th scope="col">SIU</th>
                <th scope="col">Pas Foto</th>
                <th scope="col">Foto Usaha</th>
                <th scope="col">Time</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($makeshop as $ms)
            <tr class="text-center">
                <th scope="row">{{ $ms->user_id }}</th>
                <td>{{ $ms->nm_pu }}</td>
                <td>{{ $ms->nm_usaha }}</td>
                <td>{{ $ms->alamat }}</td>
                <td>{{ $ms->nik }}</td>
                <td>
                    <a href="{{ asset('storage/' . $ms->img_ktp) }}" target="blank" class="btn-sm btn-info">
                        <i class="bi bi-eye-fill" style="color: rgb(0, 0, 0);"></i>
                    </a>
                </td>
                <td>
                    <a href="{{ asset('storage/' . $ms->img_siu) }}" target="blank" class="btn-sm btn-info">
                        <i class="bi bi-eye-fill" style="color: rgb(0, 0, 0);"></i>
                    </a>
                </td>
                <td>
                    <a href="{{ asset('storage/' . $ms->pas_foto) }}" target="blank" class="btn-sm btn-info">
                        <i class="bi bi-eye-fill" style="color: rgb(0, 0, 0);"></i>
                    </a>
                </td>
                <td>
                    <a href="{{ asset('storage/' . $ms->foto_usaha) }}" target="blank" class="btn-sm btn-info">
                        <i class="bi bi-eye-fill" style="color: rgb(0, 0, 0);"></i>
                    </a>
                </td>
                <td>{{ $ms->created_at }}</td>
                <td>
                    <form action="{{ route('admin.destroy', $ms->id) }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn-sm btn-danger border-0" style="color: rgb(0, 0, 0);" onclick="return confirm('Yakin?')">
                            <i class="bi bi-trash-fill"></i>
                        </button>
                    </form>
                    <form action="{{ route('admin.store') }}" method="post" class="d-inline">
                        @csrf
                        <input type="text" name="user_id" value="{{ $ms->user_id }}" hidden>
                        <input type="text" name="nm_pu" value="{{ $ms->nm_pu }}" hidden>
                        <input type="text" name="nm_usaha" value="{{ $ms->nm_usaha }}" hidden>
                        <input type="text" name="alamat" value="{{ $ms->alamat }}" hidden>
                        <input type="text" name="nik" value="{{ $ms->nik }}" hidden>
                        <input type="text" name="img_ktp" value="{{ $ms->img_ktp }}" hidden>
                        <input type="text" name="img_siu" value="{{ $ms->img_siu }}" hidden>
                        <input type="text" name="pas_foto" value="{{ $ms->pas_foto }}" hidden>
                        <input type="text" name="foto_usaha" value="{{ $ms->foto_usaha }}" hidden>
                        <button class="btn-sm btn-success border-0" style="color: rgb(0, 0, 0);" onclick="return confirm('Yakin?')">
                            <i class="bi bi-check-circle"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="11" class="text-center h3">DATA KOSONG</td>
            </tr>
            @endforelse
            </tbody>
    </table>
@endsection