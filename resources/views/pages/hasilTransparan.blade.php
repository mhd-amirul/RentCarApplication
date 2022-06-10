@extends('layouts.main')

@section('container')

<div class="row">
    <div class="col-lg-12">
        <div class="card px-2 bg-secondary text-white">
            <div class="card-body p-2">
                <h6 class="card-title m-0">Proses Rekomendasi Menggunakan Metode Multi-Objective Optimization On the basis of Ratio Analysis :</h5>
            </div>
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control rounded-top bg-danger text-white" disabled value="1. Pengambilan Data Kriteria">
            <table class="table table-hover">
                <thead>
                    <tr class="">
                        <th scope="col">No</th>
                        <th scope="col">Nama Kriteria</th>
                        <th scope="col">Type</th>
                        <th scope="col">Bobot</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($kriteria as $kriteria)
                    <tr class="">
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $kriteria->nama }}</td>
                        <td>{{ $kriteria->type }}</td>
                        <td>{{ $kriteria->bobot }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center h3">Empty!!!</td>
                    </tr>
                    @endforelse
                    </tbody>
            </table>
        </div>
        <div class="col-sm-12">
            <input type="text" class="form-control rounded-top bg-danger text-white" disabled value="2. Pengambilan Data Mobil Yang dipilih">
            <table class="table table-hover">
                <thead>
                    <tr class="">
                        <th scope="col">No</th>
                        <th scope="col">Merk</th>
                        <th scope="col">Tahun_Produksi</th>
                        <th scope="col">Kondisi_Fisik</th>
                        <th scope="col">Kondisi_Mesin</th>
                        <th scope="col">Muatan_Penumpang</th>
                        <th scope="col">Kapasitan_Mesin</th>
                        <th scope="col">Jenis_BBM</th>
                        <th scope="col">Harga_Sewa</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($data_mobil as $car)
                    <tr class="">
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $car->merk_id }}</td>
                        <td>{{ $car->Tahun_Produksi_id }}</td>
                        <td>{{ $car->Kondisi_Fisik_id }}</td>
                        <td>{{ $car->Kondisi_Mesin_id }}</td>
                        <td>{{ $car->Muatan_Penumpang_id }}</td>
                        <td>{{ $car->Kapasitan_Mesin_id }}</td>
                        <td>{{ $car->Jenis_BBM_id }}</td>
                        <td>{{ $car->Harga_Sewa_id }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center h3">Empty!!!</td>
                    </tr>
                    @endforelse
                    </tbody>
            </table>
        </div>
        <div class="col-sm-12">
            <input type="text" class="form-control rounded-top bg-danger text-white" disabled value="3. Pengambilan Nilai dari tiap Kriteria Mobil">
            @foreach ($db as $db)
                @if ($loop->iteration % 9)
                    {{ $db->nilai }} 
                @endif
                <br>
            @endforeach
        </div>

        <table class="table table-hover">
            <thead>
                <tr class="text-center">
                    <th scope="col">No</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Merk</th>
                    <th scope="col">Tahun Produksi</th>
                    <th scope="col">Muatan Penumpang</th>
                    <th scope="col">Harga Sewa</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($cars as $car)
                <tr class="text-center">
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>
                        <img src="{{ isset($car->gambar1) == null ? url('images/notfound.png') : asset('storage/' . $car->gambar1) }}" height="50" width="100" alt="">
                    </td>
                    <td>{{ $car->merk->nama }}</td>
                    <td>{{ $car->tahun_produksi->nama }}</td>
                    <td>{{ $car->muatan_penumpang->nama }}</td>
                    <td>{{ $car->harga_sewa->nama }}</td>
                    <td>
                        <a href="/detail/{{ $car->id }}" class="btn-sm btn-info"><i class="bi bi-eye-fill" style="color: rgb(0, 0, 0);"></i></a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center h3">MOBIL YANG COCOK TIDAK DITEMUKAN</td>
                </tr>
                @endforelse
                </tbody>
        </table>
    </div>
@endsection

{{-- 
.merk_id
.Tahun_Produksi_id
.Kondisi_Fisik_id
.Kondisi_Mesin_id
.Muatan_Penumpang_id
.Kapasitan_Mesin_id
.Jenis_BBM_id
.Harga_Sewa_id 
--}}