@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-10 mt-4">
        <div class="card py-5 px-5 border border-gray-800">
            <main class="form-registration">
                <h1 class="h3 mb-3 fw-normal text-center">EDIT TOKO</h1><hr>
                <form action="{{ route('allshops.update', $data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-sm-6 mt-2">
                            <div class="form-floating">
                                <input name="nm_pu" type="text" class="form-control rounded-top @error('nm_pu') is-invalid @enderror" id="nm_pu" placeholder="Nama Pemilik Usaha" value="{{ old('nm_pu', $data->nm_pu) }}" required>
                                <label for="nm_pu">Nama Pemilik Usaha</label>
                                @error('nm_pu')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <div class="form-floating">
                                <input name="nm_usaha" type="text" class="form-control @error('nm_usaha') is-invalid @enderror" id="nm_usaha" placeholder="Nama Usaha" value="{{ old('nm_usaha', $data->nm_usaha) }}" required>
                                <label for="nm_usaha">Nama Usaha</label>
                                @error('nm_usaha')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <div class="form-floating">
                                <input name="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Alamat" value="{{ old('alamat', $data->alamat) }}" required>
                                <label for="alamat">Alamat</label>
                                @error('alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <div class="form-floating">
                                <input name="nik" type="number" class="form-control rounded-bottom @error('nik') is-invalid @enderror" id="nik" placeholder="NIK" value="{{ old('nik', $data->nik) }}" required>
                                <label for="nik">NIK</label>
                                @error('nik')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card mt-2 mb-2 bg-secondary text-white text-left">
                        <div class="card-body p-2">
                            <h6 class="card-title m-0">Upload Berkas :</h6>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 mt-2">
                            <div class="custom-file">
                                <label for="img_ktp"><i class="bi bi-file-earmark-image"></i> Scan KTP</label>
                                <input type="hidden" name="oldgambar1" value="{{ $data->img_ktp }}">
                                <input type="file" name="img_ktp" class="form-control @error('img_ktp') is-invalid @enderror" id="img_ktp">
                                @error('img_ktp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <div class="custom-file">
                                <label for="img_siu"><i class="bi bi-file-earmark-image"></i> Surat Izin Usaha</label>
                                <input type="hidden" name="oldgambar2" value="{{ $data->img_siu }}">
                                <input type="file" name="img_siu" class="form-control @error('img_siu') is-invalid @enderror" id="img_siu">
                                @error('img_siu')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <div class="custom-file">
                                <label for="pas_foto"><i class="bi bi-file-earmark-image"></i> Pas Foto</label>
                                <input type="hidden" name="oldgambar3" value="{{ $data->pas_foto }}">
                                <input type="file" name="pas_foto" class="form-control @error('pas_foto') is-invalid @enderror" id="pas_foto">
                                @error('pas_foto')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <div class="custom-file">
                                <label for="foto_usaha"><i class="bi bi-file-earmark-image"></i> Foto Usaha</label>
                                <input type="hidden" name="oldgambar4" value="{{ $data->foto_usaha }}">
                                <input type="file" name="foto_usaha" class="form-control @error('foto_usaha') is-invalid @enderror" id="foto_usaha">
                                @error('foto_usaha')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-sm-6">
                            <button class="w-100 btn btn-primary mt-5" type="submit">SUBMIT</button>
                        </div>
                    </div>
                </form>
            </main>
        </div>
    </div>
</div>
@endsection
