@extends('layouts.main')

@section('container')
<div class="mb-5">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }} 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row">
        <div class="col-xl-12 mt-2">
            <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <img src="{{ isset($data->image) == null ? '' : asset('storage/' . $data->image) }}" alt="" class="img-fluid" width="100" style="clip-path: circle();">
                                <h6 class="f-w-600"></h6>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information :</h6>
                                <div class="row">
                                    <div class="col-sm-6 mb-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control rounded-top" id="nm_pu" value="{{ $data->username }}">
                                            <label for="nm_pu">Username</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control rounded-top" id="nm_pu" value="{{ $data->email }}">
                                            <label for="nm_pu">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control rounded-top" id="nm_pu" value="+62 {{ $data->no_hp }}">
                                            <label for="nm_pu">No Hp</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-9 mt-5 d-flex justify-content-end">
                                                <a href="{{ route('profil.edit', $data->id) }}" class="btn btn-warning">
                                                    <i class="bi bi-pencil-square"></i></i> Edit Profil
                                                </a>
                                                <a href="{{ route('changePass', $data->id) }}" class="ml-2 btn btn-warning">
                                                    <i class="mr-2 bi bi-key"></i>Ganti Password
                                                </a>
                                                @if ($data->role === 'rental')
                                                    <a href="{{ route('toko.index') }}" class="ml-2 btn btn-warning">
                                                        <i class="mr-2 bi bi-house-fill"></i>Toko
                                                    </a>
                                                @endif
                                                @if ($data->role === 'admin')
                                                    <a href="{{ route('dashboard.index') }}" class="ml-2 btn btn-warning">
                                                        <i class="mr-2 bi bi-shield-fill-exclamation"></i>Administrator
                                                    </a>
                                                @endif
                                                @if ($data->role === 'user')
                                                    @if ($makeshop)
                                                        <a class="ml-2 btn btn-warning">
                                                            <i class="mr-2 bi bi-house-fill"></i>Buka Toko
                                                        </a>
                                                    @else
                                                        <a href="{{ route('profil.create')}}" class="ml-2 btn btn-warning">
                                                            <i class="mr-2 bi bi-house-fill"></i>Buka Toko
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
        </div>
    </div>
</div>
@endsection
