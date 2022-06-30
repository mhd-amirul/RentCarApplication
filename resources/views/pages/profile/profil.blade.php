@extends('layouts.main')

@section('container')
{{-- @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif --}}
<div class="row justify-content-center mt-5">
    <div class="col-sm-10">
        <div class="card mb-3">
            <div class="bg-c-lite-green text-center">
                <img src="{{ isset($data->image) == null ? url('images/person.png') : asset('storage/' . $data->image) }}" width="300" class="{{ isset($data->image) == null ? 'my-3' : '' }}" style="clip-path: circle()">
            </div>

            <div class="card-body">
                <h4 class="card-title">INFORMASI AKUN</h4>
                <hr class="m-0 p-0">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-floating mt-3">
                            <input type="text" class="form-control rounded-top" id="nm_pu" value="{{ $data->username }}">
                            <label for="nm_pu">Username</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating mt-3">
                            <input type="text" class="form-control rounded-top" id="nm_pu" value="+62 {{ $data->no_hp }}">
                            <label for="nm_pu">No Hp</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating mt-3">
                            <input type="text" class="form-control rounded-top" id="nm_pu" value="{{ $data->email }}">
                            <label for="nm_pu">Email</label>
                        </div>
                    </div>
                    <div class="row mt-4 mb-3">
                        <div class="col-sm-10">
                            <a href="{{ route('profil.edit', $data->id) }}" class="btn btn-warning ml-1">
                                <i class="bi bi-pencil-square"></i></i> EDIT PROFIL
                            </a>
                            <a href="{{ route('changePass', $data->id) }}" class="ml-2 btn btn-warning">
                                <i class="mr-2 bi bi-key"></i>RESET PASSWORD
                            </a>
                            @if ($data->role === 'rental')
                                <a href="{{ route('toko.index') }}" class="ml-2 btn btn-warning">
                                    <i class="mr-2 bi bi-house-fill"></i>TOKO
                                </a>
                            @elseif ($data->role === 'admin')
                                <a href="{{ route('dashboard.index') }}" class="ml-2 btn btn-warning">
                                    <i class="mr-2 bi bi-shield-fill-exclamation"></i>ADMINISTRATOR
                                </a>
                            @elseif ($data->role === 'user')
                                @if ($makeshop)
                                    <a class="ml-2 btn btn-warning">
                                        <i class="mr-2 bi bi-house-fill"></i>ON PROCESS
                                    </a>
                                @else
                                    <a href="{{ route('profil.create')}}" class="ml-2 btn btn-warning">
                                        <i class="mr-2 bi bi-house-fill"></i>BUKA TOKO
                                    </a>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
