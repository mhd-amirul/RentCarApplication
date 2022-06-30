@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card py-3 px-3 border border-gray-800">
            <h5 class="textde">INFROMASI PENDAFTAR</h5>
            <div class="card bg-danger">
                <h1></h1>
            </div>
            <form action="{{ route('dashboard.store') }}" method="post" class="d-inline">
                @csrf
                <div class="row">
                    <div class="col-sm-6 mb-4">
                        <div class="form-floating">
                            <input type="text" class="form-control rounded-top" name="user_id" id="user_id" value="{{ $ms->user_id }}">
                            <label for="user_id">User ID</label>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="form-floating">
                            <input type="text" class="form-control rounded-top" name="nm_pu" id="nm_pu" value="{{ $ms->nm_pu }}">
                            <label for="nm_pu">Nama Pemilik</label>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="form-floating">
                            <input type="text" class="form-control rounded-top" name="nm_usaha" id="nm_usaha" value="{{ $ms->nm_usaha }}">
                            <label for="nm_usaha">Nama Usaha</label>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="form-floating">
                            <input type="text" class="form-control rounded-top" name="alamat" id="alamat" value="{{ $ms->alamat }}">
                            <label for="alamat">Alamat</label>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="form-floating">
                            <input type="text" name="nik" class="form-control rounded-top" id="nik" value="{{ $ms->nik }}">
                            <label for="nik">NIK</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mb-4">
                            <p class="m-b-10 f-w-600">Foto Usaha</p>
                            <div style="max-height: 200px; max-width: 376px; overflow: hidden;">
                                <input type="text" name="foto_usaha" value="{{ $ms->foto_usaha }}" hidden>
                                <img src="{{ asset('storage/' . $ms->foto_usaha) }}" alt="{{ asset('storage/' . $ms->foto_usaha) }}" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <p class="m-b-10 f-w-600">Pas Foto</p>
                            <div style="max-height: 200px; max-width: 376px; overflow: hidden;">
                                <input type="text" name="pas_foto" value="{{ $ms->pas_foto }}" hidden>
                                <img src="{{ asset('storage/' . $ms->pas_foto) }}" alt="{{ asset('storage/' . $ms->pas_foto) }}" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <p class="m-b-10 f-w-600">Surat Izin Usaha</p>
                            <div style="max-height: 200px; max-width: 376px; overflow: hidden;">
                                <input type="text" name="img_siu" value="{{ $ms->img_siu }}" hidden>
                                <img src="{{ asset('storage/' . $ms->img_siu) }}" alt="{{ asset('storage/' . $ms->img_siu) }}" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <p class="m-b-10 f-w-600">Scan KTP</p>
                            <div style="max-height: 200px; max-width: 376px; overflow: hidden;">
                                <input type="text" name="img_ktp" value="{{ $ms->img_ktp }}" hidden>
                                <img src="{{ asset('storage/' . $ms->img_ktp) }}" alt="{{ asset('storage/' . $ms->img_ktp) }}"class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <button class="btn btn-success border-0" style="color: rgb(0, 0, 0);" onclick="return confirm('Yakin Ingin Mengupload?')">
                            <i class="bi bi-pencil-square"></i> Terima
                        </button>
                    </div>
                </div>
            </form>
            <form action="{{ route('dashboard.destroy', $ms->id) }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="mt-2 btn btn-danger border-0" style="color: rgb(0, 0, 0);" onclick="return confirm('Yakin Ingin Menghapus?')">
                    <i class="bi bi-trash-fill"></i> Tolak
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
