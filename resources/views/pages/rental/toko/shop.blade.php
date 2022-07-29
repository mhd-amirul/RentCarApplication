@extends('layouts.main')

@section('container')
<div class="row justify-content-center mt-5">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-center">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner m-2" style="max-height: 350px; max-width: 350px;">
                            <div class="carousel-item active">
                                <img src="{{ isset($shop->foto_usaha) == null ? url('images/notfound.png') : asset('storage/' . $shop->foto_usaha) }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ isset($shop->pas_foto) == null ? url('images/notfound.png') : asset('storage/' . $shop->pas_foto) }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                    </div>
                </div>
                <h6 class="m-b-20 p-b-5 b-b-default f-w-600 mt-5">Informasi Toko</h6>
                <div class="row">
                    <div class="col-sm-6 mb-4">
                        <div class="form-floating">
                            <input type="text" class="form-control rounded-top" value="{{ $shop->nm_pu }}">
                            <label for="nm_pu">Nama Pemilik</label>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="form-floating">
                            <input type="text" class="form-control rounded-top" value="{{ $shop->nm_usaha }}">
                            <label for="nm_pu">Nama Usaha</label>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="form-floating">
                            <input type="text" class="form-control rounded-top" value="{{ $shop->alamat }}">
                            <label for="nm_pu">Alamat</label>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="form-floating">
                            <input type="text" class="form-control rounded-top" value="{{ $shop->nik }}">
                            <label for="nm_pu">NIK</label>
                        </div>
                    </div>
                    <div class="col-sm-12 mb-4">
                        <div class="form-floating">
                            <input type="text" class="form-control rounded-top" value="{{ $jejak }}">
                            <label for="nm_pu">Jejak</label>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <p class="m-b-10 f-w-600">Surat Izin Usaha</p>
                        <div style="max-height: 200px; max-width: 376px; overflow: hidden;" class="border border-dark">
                            <img src="{{ isset($shop->img_siu) == null ? url('images/notfound.png') : asset('storage/' . $shop->img_siu) }}" alt="#" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <p class="m-b-10 f-w-600">KTP</p>
                        <div style="max-height: 200px; max-width: 376px; overflow: hidden;" class="border border-dark">
                            <img src="{{ isset($shop->img_ktp) == null ? url('images/notfound.png') : asset('storage/' . $shop->img_ktp) }}" alt="#" class="img-fluid">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 mt-5">
                            <a href="{{ route('toko.edit', $shop->slug) }}" class="ml-1 mt-1 btn btn-sm btn-warning">
                                <i class="bi bi-pencil-square"></i> Edit
                            </a>
                            @if ($shop->longitude != null && $shop->latitude != null)
                                <a href="{{ route('sharelok', $shop->slug) }}" class="ml-1 mt-1 btn btn-sm btn-success" style="color: rgb(0, 0, 0);">
                                    <i class="bi bi-house-fill"></i> Lokasi
                                </a>
                                <a href="{{ route('setLocation', $shop->slug) }}" class="ml-1 mt-1 btn btn-sm btn-primary" style="color: rgb(0, 0, 0);">
                                    <i class="bi bi-map-fill"></i> Edit Lokasi
                                </a>
                            @else
                                <a href="{{ route('setLocation', $shop->slug) }}" class="ml-1 mt-1 btn btn-sm btn-success" style="color: rgb(0, 0, 0);">
                                    <i class="bi bi-map-fill"></i> Set Lokasi Toko
                                </a>
                            @endif
                            <a href="{{ route('activityView', $shop->slug) }}" class="ml-1 mt-1 btn btn-sm btn-dark text-white">
                                <i class="bi bi-activity"></i> Aktifitas
                            </a>
                            <form action="{{ route('toko.destroy', $shop->slug) }}" method="post" class="d-inline" id="deleteShop-form">
                                @method('delete')
                                @csrf
                                <button id="deleteShop" class="ml-1 mt-1 btn btn-sm btn-danger" style="color: rgb(0, 0, 0);"><i class="bi bi-trash-fill"> Hapus</i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card px-5 py-5">
            <h4 class="m-b-20 p-b-5 b-b-default ">Daftar Mobil</h4>
            <div class="row">
                <div class="col">
                    @if ($shop->longitude != null && $shop->latitude != null)
                        <a href="{{ route('shop.create') }}" class="btn btn-sm btn-primary mb-2">Tambah Mobil</a>
                    @else
                        <a href="{{ route('setLocation', $shop->slug) }}"><h6 class="mb-21 mt-2">Set lokasi toko dahulu</h6></a>
                    @endif
                </div>
            </div>

            <form action="{{ route('toko.index') }}">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="search.." name="search" value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>

            <div class="row justify-content-center">
                <div class="col-sm-12 ml-2">
                    <table class="table table-responsive table-hover">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">No</th>
                                <th scope="col">Merk</th>
                                <th scope="col">No Polisi</th>
                                {{-- <th scope="col">Harga Sewa</th> --}}
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($cars as $car)
                                <tr class="text-center">
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $car->merk->nama }}</td>
                                    <td>{{ $car->no_polisi }}</td>
                                    {{--  <td>{{ $car->tahun_produksi->nama }}</td>  --}}
                                    {{-- <td>{{ $car->harga_sewa->nama }}</td> --}}
                                    <td>
                                        <a href="{{ route('shop.show', $car->slug) }}" class="btn btn-sm btn-info"><i class="bi bi-eye-fill" style="color: rgb(0, 0, 0);"></i></a>
                                        <form action="{{ route('shop.destroy', $car->id) }}" method="post" class="d-inline" id="deleteCar-form-{{ $car->id }}">
                                            @method('delete')
                                            @csrf
                                            <button id="deleteCar" class="btn btn-sm btn-danger" style="color: rgb(0, 0, 0);" type="submit" data-id="{{ $car->id }}"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center h3">data tidak ditemukan!</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $cars->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('sweet')
    <script>
        $('#deleteShop').on('click', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            Swal.fire({
                title: 'Are you sure ?',
                text: 'Hapus toko ?',
                icon: 'warning',
                confirmButtonColor: '#d33',
                cancelButtonColor: '#aaa',
                confirmButtonText: 'confirm',
                showCancelButton: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#deleteShop-form').submit();
                }
            })
        });

        $(document).on('click', '#deleteCar', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            Swal.fire({
                title: 'Are you sure ?',
                text: "Hapus mobil ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#deleteCar-form-'+id).submit();
                }
            })
        });
    </script>
@endpush

