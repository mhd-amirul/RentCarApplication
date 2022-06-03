@extends('layouts.main')

@section('container')
<div class="row justify-content-center mt-5 mb-5">
    <div class="col-lg-5 mt-4">
        <main class="form-registration mt-5">
            <h1 class="h3 mb-3 fw-normal text-center">Tambah Kriteria</h1>
            <form action="{{ route('allkriteria.store') }}" method="post">
                @csrf
                <div class="form-floating">
                    <input type="text" name="nama" class="form-control rounded-top @error('nama') is-invalid @enderror" id="nama" placeholder="Kriteria" value="{{ old('nama') }}" required>
                    <label for="nama">Kriteria</label>
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" name="bobot" class="form-control @error('bobot') is-invalid @enderror" id="bobot" placeholder="Bobot" value="{{ old('bobot') }}" required>
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
                        <option value="benefit" selected>benefit</option>
                        <option value="cost">cost</option>
                    </select>
                </div>
                <button class="w-100 btn btn-lg btn-secondary mt-3" type="submit">Tambah</button>
            </form>
        </main>
    </div>
</div>
@endsection