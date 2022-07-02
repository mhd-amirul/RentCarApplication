@extends('layouts.main')

@section('container')
<div class="row justify-content-center" style="margin-top: 2cm">
    <div class="col-lg-6">
        <div class="card py-5 px-5 border border-gray-800">
            <main class="form-signin">
                <h1 class="h3 mb-3 fw-normal text-center">EDIT KRITERIA</h1>
                <form action="{{ route('allkriteria.update', $kriteria->id) }}" method="post">
                    @method('put')
                    @csrf
                    <div class="form-floating">
                        <input type="text" name="nama" class="form-control rounded-top @error('nama') is-invalid @enderror" id="nama" placeholder="Kriteria" value="{{ old('nama', $kriteria->nama) }}" required>
                        <label for="nama">Kriteria</label>
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" name="bobot" class="form-control @error('bobot') is-invalid @enderror" id="bobot" placeholder="Bobot" value="{{ old('bobot', $kriteria->bobot) }}" required>
                        <label for="bobot">Bobot</label>
                        @error('bobot')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="card mt-2 mb-2 bg-secondary text-white text-left">
                        <div class="card-body p-2">
                            <h6 class="card-title m-0">Tipe Kriteria :</h6>
                        </div>
                    </div>
                    <div class="">
                        <select name="type" id="type" class="form-control mb-3">
                            <option value="{{ $kriteria->type }}" hidden>{{ $kriteria->type }}</option>
                            <option value="benefit">benefit</option>
                            <option value="cost">cost</option>
                        </select>
                    </div>
                    <div class="modal fade" id="DeleteMs" tabindex="-1" aria-labelledby="DeleteMsLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="DeleteMsLabel">Confirmation</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Yakin Ingin Mengubah Kriteria Ini?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Confirm</button>
                            </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="w-100 btn btn-primary text-decoration-none" data-bs-toggle="modal" data-bs-target="#DeleteMs">SUBMIT</a>
                </form>
            </main>
        </div>
    </div>
</div>
@endsection
