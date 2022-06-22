@extends('layouts.main')

@section('container')
<div class="card">
    <div class="card-body">
        <h6 class="m-b-20 p-b-5 b-b-default f-w-600 ">Information :</h6>
        <div class="row">
            <div class="col-sm-6 mb-4">
                <div style="max-height: 300px; overflow: hidden;">
                    <img src="{{ asset('storage/' . $ms->foto_usaha) }}" alt="{{ asset('storage/' . $ms->foto_usaha) }}" class="img-fluid">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                        <a target="blank" href="{{ asset('storage/' . $ms->foto_usaha) }}" class="card-title text-center flex-fill p-4 fs-3 text-white text-decoration-none" style="background-color: rgba(0,0,0,0.7 )">Foto Usaha</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-4">
                <div style="max-height: 300px; overflow: hidden;">
                    <img src="{{ asset('storage/' . $ms->pas_foto) }}" alt="{{ asset('storage/' . $ms->pas_foto) }}" class="img-fluid">
                </div>
                <div class="card-img-overlay d-flex align-items-center p-0">
                    <a target="blank" href="{{ asset('storage/' . $ms->pas_foto) }}" class="card-title text-center flex-fill p-4 fs-3 text-white text-decoration-none" style="background-color: rgba(0,0,0,0.7 )">Pas Foto</a>
                </div>
            </div>
            <div class="col-sm-6 mb-4">
                <div style="max-height: 300px; overflow: hidden;">
                    <img src="{{ asset('storage/' . $ms->img_siu) }}" alt="{{ asset('storage/' . $ms->img_siu) }}" class="img-fluid">
                </div>
                <div class="card-img-overlay d-flex align-items-center p-0">
                    <a target="blank" href="{{ asset('storage/' . $ms->img_siu) }}" class="card-title text-center flex-fill p-4 fs-3 text-white text-decoration-none" style="background-color: rgba(0,0,0,0.7 )">Suart Izin Usaha</a>
                </div>
            </div>
            <div class="col-sm-6 mb-4">
                <div style="max-height: 300px; overflow: hidden;">
                    <img src="{{ asset('storage/' . $ms->img_ktp) }}" alt="{{ asset('storage/' . $ms->img_ktp) }}" class="img-fluid">
                </div>
                <div class="card-img-overlay d-flex align-items-center p-0">
                    <a target="blank" href="{{ asset('storage/' . $ms->img_ktp) }}" class="card-title text-center flex-fill p-4 fs-3 text-white text-decoration-none" style="background-color: rgba(0,0,0,0.7 )">Foto KTP</a>
                </div>
            </div>
            <div class="col-sm-6 mb-4">
                <div class="form-floating">
                    <input disabled type="text" class="form-control rounded-top" id="nm_pu" value="{{ $ms->user_id }}">
                    <label for="nm_pu">User ID</label>
                </div>
            </div>
            <div class="col-sm-6 mb-4">
                <div class="form-floating">
                    <input disabled type="text" class="form-control rounded-top" id="nm_pu" value="{{ $ms->nm_pu }}">
                    <label for="nm_pu">Nama Pemilik</label>
                </div>
            </div>
            <div class="col-sm-6 mb-4">
                <div class="form-floating">
                    <input disabled type="text" class="form-control rounded-top" id="nm_pu" value="{{ $ms->nm_usaha }}">
                    <label for="nm_pu">Nama Usaha</label>
                </div>
            </div>
            <div class="col-sm-6 mb-4">
                <div class="form-floating">
                    <input disabled type="text" class="form-control rounded-top" id="nm_pu" value="{{ $ms->alamat }}">
                    <label for="nm_pu">Alamat</label>
                </div>
            </div>
            <div class="col-sm-6 mb-4">
                <div class="form-floating">
                    <input disabled type="text" class="form-control rounded-top" id="nm_pu" value="{{ $ms->nik }}">
                    <label for="nm_pu">NIK</label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <form action="{{ route('dashboard.store') }}" method="post" class="d-inline ml-1">
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
                        <button class="btn-sm btn-success border-0" style="color: rgb(0, 0, 0);" onclick="return confirm('Yakin Ingin Mengupload?')">
                            <i class="bi bi-pencil-square"></i> Terima
                        </button>
                    </form>
                    <form action="{{ route('dashboard.destroy', $ms->id) }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn-sm btn-danger border-0" style="color: rgb(0, 0, 0);" onclick="return confirm('Yakin Ingin Menghapus?')">
                            <i class="bi bi-trash-fill"></i> Tolak
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection