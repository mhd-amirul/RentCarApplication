@extends('layouts.main')

@section('container')
<div class="card mb-3 mt-2 bg-secondary text-white"><div class="card-body p-2"><h6 class="card-title m-0">Pilihan Alternatif</h5></div></div>
    <div class="row">
        <div class="col-lg-2">
            <div class="card text-white bg-dark">
                <div class="card-body">
                    <div class="pt-1">
                        <a class="text-white fs-6" href="/admin">
                            <i class="mr-2 bi bi-house"> Dashboard</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <div class="pt-1">
                        <a class="text-white fs-6" href="{{ route('allalternatif.create') }}">
                            <i class="mr-2 bi bi-plus-circle"> Add Data</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="card text-white bg-success">
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
            <div class="card text-white bg-danger">
                <div class="card-body">
                    <div class="pt-1">
                        <a class="text-white fs-6" href="{{ route('allshops.index') }}">
                            <i class="mr-2 bi bi-house-fill"> Toko</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="card text-white bg-info">
                <div class="card-body">
                    <div class="pt-1">
                        <a class="text-white fs-6" href="{{ route('allkriteria.index') }}">
                            <i class="mr-2 bi bi-card-list"> Kriteria</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="card mb-3 mt-2 bg-secondary text-white"><div class="card-body p-2"><h6 class="card-title m-0">Alternatif : Merk</h5></div></div>
    <table class="table table-hover">
        <thead>
            <tr >
                <th scope="col">ID</th>
                <th scope="col">Jenis kriteria</th>
                <th scope="col">Nama Alternatif</th>
                <th scope="col">Nilai</th>
                <th scope="col">Created At</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($alternatif as $alternatif)
            <tr >
                <th scope="row">{{ $alternatif->id }}</th>
                <td>{{ $alternatif->kriteria->nama }}</td>
                <td>{{ $alternatif->nama }}</td>
                <td>{{ $alternatif->nilai }}</td>
                <td>{{ $alternatif->created_at }}</td>
                <td>
                    <a href="{{ route('allalternatif.edit', $alternatif->id) }}" class="btn-sm btn-warning" style="color: rgb(0, 0, 0);"><i class="bi bi-pencil-square"></i></i></a>
                    <form action="{{ route('allalternatif.destroy', $alternatif->id) }}" method="post" class="d-inline">
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
                <td colspan="7" class="text-center h3">DATA KOSONG</td>
            </tr>
            @endforelse
            </tbody>
    </table>
@endsection