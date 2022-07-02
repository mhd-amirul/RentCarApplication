@extends('layouts.main')

@section('container')
<div class="row justify-content-center mb-5">
    <div class="col-lg-7">
        <div class="card py-3 px-3 border border-gray-800">
            <main class="form-registration mt-3">
                <h1 class="h3 mb-4 fw-normal text-center">EDIT MOBIL</h1>
                <form action="{{ route('shop.update', $car->id) }}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="card mt-2 mb-2 bg-secondary text-white text-left">
                        <div class="card-body p-2">
                            <h6 class="card-title m-0">Pilih Kriteria Mobil :</h6>
                        </div>
                    </div>

                    <div class="row px-2">
                        @foreach ($kriteria as $item)
                        <div class="col-sm-6">
                            <div class="form-floating mb-1">
                                <select name="{{ $item->nama."_id" }}" class="form-select" aria-label="Floating label select example">
                                    @foreach ($alternatif as $data)
                                        @if ($data->kriteria_id == $item->id)
                                            @if (old('merk_id', $car[str_replace(' ','_',$item->nama.'_id')]) == $data->id)
                                                <option value="{{ $data->id }}" selected>{{ $data->nama }}</option>
                                            @else
                                                <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                            @endif
                                        @endif
                                    @endforeach
                                </select>
                                <label for="{{ $item->nama."_id" }}">{{ $item->nama }}</label>
                            </div>
                        </div>
                    @endforeach
                    </div>

                    <div class="card mt-2 mb-2 bg-secondary text-white text-left">
                        <div class="card-body p-2">
                            <h6 class="card-title m-0">Informasi Mobil :</h6>
                        </div>
                    </div>
                    <div class="row px-2">
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" name="stok" class="form-control rounded-top @error('stok') is-invalid @enderror" id="stok" placeholder="Stok" value="{{ old('stok', $car->stok) }}" required>
                                <label for="stok">Stok</label>
                                @error('stok')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" name="plat" class="form-control rounded-top @error('plat') is-invalid @enderror" id="plat" placeholder="Plat Kendaraan" value="">
                                <label for="plat">Plat Kendaraan</label>
                                @error('plat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 mt-2">
                        <label for="deskripsi">Deskripsi</label>
                        <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi', $car->deskripsi) }}">
                        <trix-editor input="deskripsi"></trix-editor>
                        @error('deskripsi')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="card mt-2 mb-2 bg-secondary text-white text-left">
                        <div class="card-body p-2">
                            <h6 class="card-title m-0">Upload Gambar Mobil :</h6>
                        </div>
                    </div>
                    <div class="row px-2">
                        <div class="col-sm-6 mt-2">
                            <label for="gambar1">Gambar Profil Mobil</label>
                            <input type="file" class="form-control @error('gambar1') is-invalid @enderror" id="gambar1" name="gambar1" >
                            @error('gambar1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-6 mt-2">
                            <label for="gambar2">Gambar Mobil 1</label>
                            <input type="file" class="form-control @error('gambar2') is-invalid @enderror" id="gambar2" name="gambar2">
                            @error('gambar2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-6 mt-2">
                            <label for="gambar3">Gambar Mobil 2</label>
                            <input type="file" class="form-control @error('gambar3') is-invalid @enderror" id="gambar3" name="gambar3">
                            @error('gambar3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-6 mt-2">
                            <label for="gambar4">Gambar Mobil 3</label>
                            <input type="file" class="form-control @error('gambar4') is-invalid @enderror" id="gambar4" name="gambar4">
                            @error('gambar4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-6 mt-2">
                            <label for="gambar5">Gambar Mobil 4</label>
                            <input type="file" class="form-control @error('gambar5') is-invalid @enderror" id="gambar5" name="gambar5">
                                @error('gambar5')
                                <div class="invalid-feedback">
                                        {{ $message }}
                                </div>
                                @enderror
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-sm-10 mt-4">
                                <div class="modal fade" id="mobil" tabindex="-1" aria-labelledby="mobilLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="mobilLabel">Confirm</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Yakin Ingin Mengubah Informasi Mobil?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Hapus</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="w-100 btn btn-sm btn-danger text-decoration-none" data-bs-toggle="modal" data-bs-target="#mobil">EDIT MOBIL</a>
                            </div>
                        </div>
                    </div>
                </form>
            </main>
        </div>
    </div>
</div>
@endsection
