@extends('layouts.main')

@section('container')
<div class="card">
    <div class="card-body">
        <h6 class="m-b-20 p-b-5 b-b-default f-w-600 ">Information :</h6>
        <div class="row">
            <div class="row justify-content-center">
                <div class="col-sm-6 mb-4">
                    <div style="max-height: 300px; overflow: hidden;">
                        <img src="{{ isset($users->image) == null ? url('images/notfound.png') : asset('storage/' . $users->image) }}" alt="{{ isset($users->image) == null ? url('images/notfound.png') : asset('storage/' . $users->image) }}" class="img-fluid">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                            <a target="blank" href="{{ isset($users->image) == null ? url('images/notfound.png') : asset('storage/' . $users->image) }}" class="card-title text-center flex-fill p-4 fs-3 text-white text-decoration-none" style="background-color: rgba(0,0,0,0.7 )">Foto Profil</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-4">
                <div class="form-floating">
                    <input disabled type="text" class="form-control rounded-top" id="nm_pu" value="{{ $users->username }}">
                    <label for="nm_pu">Username</label>
                </div>
            </div>
            <div class="col-sm-6 mb-4">
                <div class="form-floating">
                    <input disabled type="text" class="form-control rounded-top" id="nm_pu" value="{{ $users->email }}">
                    <label for="nm_pu">Email</label>
                </div>
            </div>
            <div class="col-sm-6 mb-4">
                <div class="form-floating">
                    <input disabled type="text" class="form-control rounded-top" id="nm_pu" value="{{ $users->no_hp }}">
                    <label for="nm_pu">No Hp</label>
                </div>
            </div>
            <div class="col-sm-6 mb-4">
                <div class="form-floating">
                    <input disabled type="text" class="form-control rounded-top" id="nm_pu" value="{{ $users->role }}">
                    <label for="nm_pu">Role</label>
                </div>
            </div>
            <div class="col-sm-6 mb-4">
                <div class="form-floating">
                    <input disabled type="text" class="form-control rounded-top" id="nm_pu" value="{{ $users->created_at }}">
                    <label for="nm_pu">Created At</label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <a href="{{ route('allusers.edit', $users->id) }}" class="btn btn-warning">
                        <i class="bi bi-pencil-square"></i>
                    Edit Profil
                    </a>
                    <form action="{{ route('allusers.destroy', $users->id) }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger border-0" style="color: rgb(0, 0, 0);" onclick="return confirm('Yakin Ingin Menghapus?')">
                            <i class="bi bi-trash-fill"></i> Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection