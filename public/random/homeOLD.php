@extends('layouts.main')

@section('container')

<form action="/hitung" method="">
    @csrf
    <div class="row g-0">
        <div class="card mx-3 px-3 bg-secondary text-white p-2">
            <h6 class="card-title m-0">Pilih Kriteria Mobil Sesuai Keinginan Anda</h6>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <label for="product" class="form-label">Merk</label>
                    <select name="kritmerk" class="form-control bg-secondary text-white">
                        @foreach ($merk as $data)
                            <option value="{{ $data->id }}">{{ $data->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <label for="product" class="form-label">Tahun Produksi</label>
                    <select name="kritthn" class="form-control bg-secondary text-white">
                        @foreach ($tahun_produksi as $data)
                            <option value="{{ $data->nilai }}">{{ $data->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <label for="product" class="form-label">Muatan Penumpang</label>
                    <select name="kritmp" class="form-control bg-secondary text-white">
                        @foreach ($muatan_penumpang as $data)
                            <option value="{{ $data->nilai }}">{{ $data->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <label for="product" class="form-label">Kapasitas Mesin</label>
                    <select name="kritkm2" class="form-control bg-secondary text-white">
                        @foreach ($kapasitas_mesin as $data)
                            <option value="{{ $data->nilai }}">{{ $data->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <label for="product" class="form-label">Kondisi Mesin</label>
                    <select name="kritkm" class="form-control bg-secondary text-white">
                        @foreach ($kondisi_mesin as $data)
                            <option value="{{ $data->nilai }}">{{ $data->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <label for="product" class="form-label">Kondisi Fisik</label>
                    <select name="kritkf" class="form-control bg-secondary text-white">
                        @foreach ($kondisi_fisik as $data)
                            <option value="{{ $data->nilai }}">{{ $data->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <label for="product" class="form-label">Jenis BBM</label>
                    <select name="kritjb" class="form-control bg-secondary text-white">
                        @foreach ($jenis_bbm as $data)
                            <option value="{{ $data->nilai }}">{{ $data->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <label for="product" class="form-label">Harga Sewa</label>
                    <select name="kriths" class="form-control bg-secondary text-white">
                        @foreach ($harga_sewa as $data)
                            <option value="{{ $data->nilai }}">{{ $data->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="card col-sm-3 p-0 ms-auto mb-0">
            <button type="submit" class="btn btn-secondary">Cek Rekomendasi</button>
        </div>
    </div>
</form>

@endsection
