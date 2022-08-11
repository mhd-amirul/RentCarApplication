@extends('layouts.main')

@section('container')
<div class="row justify-content-center mt-5">
    <div class="col-lg-12">
        <div class="card px-5 py-5">
            <h2 class="text-center m-b-20 p-b-5 b-b-default f-w-600">PERHITUNGAN HASIL SISTEM REKOMENDASI RENTAL MOBIL</h2>
        </div>
    </div>
    <div class="col-lg-12 justify-content-center">
        <div class="row">
            <div class="col-lg-12">
                <div class="card px-5 pt-5">
                    <h4 class="m-b-20 p-b-5 b-b-default f-w-600">Pengambilan data kriteria dan alternatif dari database</h4>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card px-5 py-5">
                    <h3>Kriteria</h3>
                    <table class="table table-responsive table-hover">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Bobot</th>
                                <th>Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kriteria as $krit)
                                <tr>
                                    <td>{{ $krit->nama }}</td>
                                    <td>{{ $krit->bobot }}</td>
                                    <td>{{ $krit->type }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card px-5 py-5">
                    <h3>Alternatif</h3>
                    <table class="table table-responsive table-hover">
                        <thead>
                            <tr>
                                <th>Kriteria</th>
                                <th>Alternatif</th>
                                <th>Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($alternatif as $alter)
                                <tr>
                                    <td>{{ $alter->kriteria->nama }}</td>
                                    <td>{{ $alter->nama }}</td>
                                    <td>{{ $alter->nilai }}</td>
                                </tr>
                            @endforeach
                                <tr>{{ $alternatif->links() }}</tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card px-5 pt-5">
                    <h4 class="m-b-20 p-b-5 b-b-default f-w-600">Pengambilan mobil hasil filter pengguna beserta nilainya yang akan dibentuk ke matriks keputusan</h4>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card px-5 py-5">
                    <h3>Mobil filter (belum diproses)</h3>
                    <table class="table table-responsive table-hover text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                @foreach ($kriteria as $krit)
                                    <th>{{ $krit->nama }}_id</th>
                                @endforeach
                                </tr>
                        </thead>
                        <tbody>
                            @foreach ($allCars as $car)
                                <tr>
                                    <td>{{ $car->id }}</td>
                                    <td>{{ $car->merk_id }}</td>
                                    <td>{{ $car->Tahun_Produksi_id }}</td>
                                    <td>{{ $car->Kondisi_Fisik_id }}</td>
                                    <td>{{ $car->Kondisi_Mesin_id }}</td>
                                    <td>{{ $car->Muatan_Penumpang_id }}</td>
                                    <td>{{ $car->Kapasitas_Mesin_id }}</td>
                                    <td>{{ $car->Jenis_BBM_id }}</td>
                                    <td>{{ $car->Harga_Sewa_id }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card px-5 py-5">
                    <h3>Nilai alternatif</h3>
                    <table class="table table-responsive table-hover text-center">
                        <thead>
                            <tr>
                                <th>ID Mobil</th>
                                <th colspan="8">Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sample as $id_car => $value)
                                <tr>
                                    <td>{{ $id_car }}</td>
                                    @foreach ($kriteria2 as $id_kriteria => $value)
                                        @if (isset($sample[$id_car][$id_kriteria]))
                                            <td>{{ $sample[$id_car][$id_kriteria] }}</td>
                                        @endif
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card px-5 pt-5">
                    <div class="row">
                        <div class="col-sm-6">
                            <h4 class="m-b-20 p-b-5 b-b-default f-w-600">Normalisasi matriks keputusan</h4>
                        </div>
                        <div class="col-sm-6">
                            <h4 class="m-b-20 p-b-5 b-b-default f-w-600">Kemudian optimasi hasil normalisasi</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card px-5 py-5">
                    <h3>Normalisasi</h3>
                    <table class="table table-responsive table-hover text-center">
                        <thead>
                            <tr>
                                <th>ID Mobil</th>
                                <th colspan="8">Hasil Normalisasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($normal as $id_car => $value)
                                <tr>
                                    <td>{{ $id_car }}</td>
                                    @foreach ($kriteria2 as $id_kriteria => $value)
                                        @if (isset($normal[$id_car][$id_kriteria]))
                                            <td>{{ $normal[$id_car][$id_kriteria] }}</td>
                                        @endif
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card px-5 py-5">
                    <h3>Optimasi</h3>
                    <table class="table table-responsive table-hover text-center">
                        <thead>
                            <tr>
                                <th>ID Mobil</th>
                                <th>Hasil Optimasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($optimasi as $id_car => $value)
                                <tr>
                                    <td>{{ $id_car }}</td>
                                    <td>{{ $optimasi[$id_car] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card px-5 pt-5">
                    <h4 class="m-b-20 p-b-5 b-b-default f-w-600">Perangkingan di urutkan dari nilai terbesar ke terkecil</h4>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card px-5 py-5">
                    <h3>Perangkingan</h3>
                    <table class="table table-responsive table-hover text-center">
                        <thead>
                            <tr>
                                <th>Rangking</th>
                                <th>ID Mobil</th>
                                <th>Nilai Akhir</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cars as $id)
                                <tr>
                                    <td>{{ $id->ranking }}</td>
                                    <td>{{ $id->id }}</td>
                                    <td>{{ $id->nilai }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card px-5 pt-5">
                    <h4 class="m-b-20 p-b-5 b-b-default f-w-600">Hasil rekomendasi mobil rental</h4>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card px-5 py-5">
                    <table class="table table-responsive table-hover text-center">
                        <thead>
                            <tr>
                                <th scope="col">Ranking</th>
                                <th scope="col">No Polisi</th>
                                <th scope="col">Merk</th>
                                <th scope="col">Tahun</th>
                                <th scope="col">Seater</th>
                                <th scope="col">CC</th>
                                <th scope="col">Jenis BBM</th>
                                <th scope="col">Harga Sewa</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cars as $car)
                                <tr>
                                    <th scope="row">{{ $car->ranking }}</th>
                                    <td>{{ $car->no_polisi }}</td>
                                    <td>{{ $car->merk->nama }}</td>
                                    <td>{{ $car->tahun_produksi->nama }}</td>
                                    <td>{{ $car->muatan_penumpang->nama }}</td>
                                    <td>{{ $car->kapasitas_mesin->nama }}</td>
                                    <td>{{ $car->jenis_bbm->nama }}</td>
                                    <td>{{ $car->stok }}</td>
                                    <td>{{ "Rp. " . number_format($car->harga_sewa->nama,2,',','.') . '\hari' }}</td>
                                    <td>
                                        <a href="{{ route('detailMobil', $car->slug) }}" class="btn btn-sm btn-info">
                                            <i class="bi bi-eye-fill" style="color: rgb(0, 0, 0);"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
