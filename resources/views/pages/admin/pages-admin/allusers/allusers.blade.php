@extends('layouts.main')

@section('container')
<div class="card mb-3 mt-2 bg-secondary text-white"><div class="card-body p-2"><h6 class="card-title m-0">Data Pengguna : </h5></div></div>
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
                        <a class="text-white fs-6" href="{{ route('allusers.create') }}">
                            <i class="mr-2 bi bi-plus-circle"> Add User</i>
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
    <table class="table table-hover">
        <thead>
            <tr >
                <th scope="col">ID</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">No Hp</th>
                <th scope="col">Profil</th>
                <th scope="col">Role</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($user as $user)
            <tr >
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>+62{{ $user->no_hp }}</td>
                <td>
                    <a href="{{ asset('storage/' . $user->image) }}" target="blank" class="btn-sm btn-info">
                        <i class="bi bi-eye-fill" style="color: rgb(0, 0, 0);"></i>
                    </a>
                </td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->created_at }}</td>
                <td>{{ $user->updated_at }}</td>
                <td>
                    <a href="{{ route('changePass.edit', $user->id) }}" class="btn-sm btn-warning"><i class="bi bi-key"></i></a>
                    <a href="{{ route('allusers.edit', $user->id) }}" class="btn-sm btn-warning"><i class="bi bi-pencil-square"></i></a>
                    <form action="{{ route('allusers.destroy', $user->id) }}" method="post" class="d-inline">
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
                <td colspan="11" class="text-center h3">DATA KOSONG</td>
            </tr>
            @endforelse
            </tbody>
    </table>
@endsection