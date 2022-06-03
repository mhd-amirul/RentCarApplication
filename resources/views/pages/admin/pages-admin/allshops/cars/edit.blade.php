@extends('layouts.main')

@section('container')
<div class="row justify-content-center mb-5">
    <div class="col-lg-6">
        <main class="form-registration mt-3">
            <h1 class="h3 mb-5 fw-normal text-center">Edit Mobil</h1>
            <form action="{{ route('allcars.update', $car->id) }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="card mt-2 mb-2 bg-secondary text-white text-left">
                    <div class="card-body p-2">
                        <h6 class="card-title m-0">Pilih Kriteria Mobil :</h6>
                    </div>
                </div>
                <div class="form-floating mb-1">
                        <select name="merk_id" class="form-select" aria-label="Floating label select example">
                            @foreach ($merk as $data)
                                @if (old('merk_id', $car->merk_id) == $data->id)
                                    <option value="{{ $data->id }}" selected>{{ $data->nama }}</option>
                                @else
                                    <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                @endif
                            @endforeach
                    </select>
                    <label for="merk_id">Merk</label>
                </div>
                <div class="form-floating mb-1">
                    <select name="tp_id" class="form-select" aria-label="Floating label select example">
                            @foreach ($tahun_produksi as $data)
                                @if (old('tp_id', $car->tp_id) == $data->id)
                                    <option value="{{ $data->id }}" selected>{{ $data->nama }}</option>
                                @else
                                    <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                @endif
                            @endforeach
                    </select>
                    <label for="tp_id">Merk</label>
                </div>
                <div class="form-floating mb-1">
                    <select name="mp_id" class="form-select" aria-label="Floating label select example">
                        @foreach ($muatan_penumpang as $data)
                            @if (old('mp_id', $car->mp_id) == $data->id)
                                <option value="{{ $data->id }}" selected>{{ $data->nama }}</option>
                            @else
                                <option value="{{ $data->id }}">{{ $data->nama }}</option>
                            @endif
                        @endforeach
                    </select>
                    <label for="mp_id">Muatan Penumpang</label>
                </div>
                <div class="form-floating mb-1">
                    <select name="km2_id" class="form-select" aria-label="Floating label select example">
                        @foreach ($kapasitas_mesin as $data)
                            @if (old('km2_id', $car->km2_id) == $data->id)
                                <option value="{{ $data->id }}" selected>{{ $data->nama }}</option>
                            @else
                                <option value="{{ $data->id }}">{{ $data->nama }}</option>
                            @endif
                        @endforeach
                    </select>
                    <label for="km2_id">Kapasitas Mesin</label>
                </div>
                <div class="form-floating mb-1">
                    <select name="km_id" class="form-select" aria-label="Floating label select example">
                        @foreach ($kondisi_mesin as $data)
                            @if (old('km_id', $car->km_id) == $data->id)
                                <option value="{{ $data->id }}" selected>{{ $data->nama }}</option>
                            @else
                                <option value="{{ $data->id }}">{{ $data->nama }}</option>
                            @endif
                        @endforeach
                    </select>
                    <label for="km_id">Kondisi Mesin</label>
                </div>
                <div class="form-floating mb-1">
                    <select name="kf_id" class="form-select" aria-label="Floating label select example">
                        @foreach ($kondisi_fisik as $data)
                            @if (old('kf_id', $car->kf_id) == $data->id)
                                <option value="{{ $data->id }}" selected>{{ $data->nama }}</option>
                            @else
                                <option value="{{ $data->id }}">{{ $data->nama }}</option>
                            @endif
                        @endforeach
                    </select>
                    <label for="kf_id">Kondisi Fisik</label>
                </div>
                <div class="form-floating mb-1">
                    <select name="jb_id" class="form-select" aria-label="Floating label select example">
                        @foreach ($jenis_bbm as $data)
                            @if (old('jb_id', $car->jb_id) == $data->id)
                                <option value="{{ $data->id }}" selected>{{ $data->nama }}</option>
                            @else
                                <option value="{{ $data->id }}">{{ $data->nama }}</option>
                            @endif
                        @endforeach
                    </select>
                    <label for="jb_id">Jenis BBM</label>
                </div>
                <div class="form-floating mb-1">
                    <select name="hs_id" class="form-select" aria-label="Floating label select example">
                        @foreach ($harga_sewa as $data)
                            @if (old('hs_id', $car->hs_id) == $data->id)
                                <option value="{{ $data->id }}" selected>{{ $data->nama }}</option>
                            @else
                                <option value="{{ $data->id }}">{{ $data->nama }}</option>
                            @endif
                        @endforeach
                    </select>
                    <label for="hs_id">Harga Sewa</label>
                </div>
                <div class="card mt-2 mb-2 bg-secondary text-white text-left">
                    <div class="card-body p-2">
                        <h6 class="card-title m-0">Upload Gambar Mobil :</h6>
                    </div>
                </div>
                <div>
                    <label for="gambar1">Gambar Profil Mobil</label>
                    <input type="file" class="form-control @error('gambar1') is-invalid @enderror" id="gambar1" name="gambar1" >
                    @error('gambar1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <label for="gambar2">Gambar Mobil 1</label>
                    <input type="file" class="form-control @error('gambar2') is-invalid @enderror" id="gambar2" name="gambar2">
                    @error('gambar2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <label for="gambar3">Gambar Mobil 2</label>
                    <input type="file" class="form-control @error('gambar3') is-invalid @enderror" id="gambar3" name="gambar3">
                    @error('gambar3')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <label for="gambar4">Gambar Mobil 3</label>
                    <input type="file" class="form-control @error('gambar4') is-invalid @enderror" id="gambar4" name="gambar4">
                    @error('gambar4')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <label for="gambar4">Gambar Mobil 3</label>
                    <input type="file" class="form-control @error('gambar4') is-invalid @enderror" id="gambar4" name="gambar4">
                    @error('gambar4')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <label for="gambar5">Gambar Mobil 4</label>
                    <input type="file" class="form-control @error('gambar5') is-invalid @enderror" id="gambar5" name="gambar5">
                        @error('gambar5')
                        <div class="invalid-feedback">
                                {{ $message }}
                        </div>
                        @enderror
                </div>
                <button class="w-100 btn btn-lg btn-secondary mt-3" type="submit">Tambah</button>
            </form>
        </main>
    </div>
</div>
@endsection