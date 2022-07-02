@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card px-4 py-4 border border-grey-500">
            <h2 class="m-b-20 p-b-5 b-b-default mt-3 text-center">DASHBOARD ADMIN</h2>
            <div class="row justify-content-center">
                <div class="col-lg-2">
                    <div class="card text-white bg-dark">
                        <div class="card-body">
                            <div class="pt-1">
                                <a class="text-white fs-6" href="{{ route('dashboard.index') }}">
                                    <i class="mr-2 bi bi-house"> Dashboard</i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card text-white bg-secondary">
                        <div class="card-body">
                            <div class="pt-1">
                                <a class="text-white fs-6" href="{{ route('allshops.create') }}">
                                    <i class="mr-2 bi bi-plus-circle"> Add Shop</i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card text-white bg-primary">
                        <div class="card-body">
                            <div class="pt-1">
                                <a class="text-white fs-6" href="{{ route('allusers.index') }}">
                                    <i class="mr-2 bi bi-person-fill"> Pengguna</i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card text-white bg-warning">
                        <div class="card-body">
                            <div class="pt-1">
                                <a class="text-white fs-6" href="{{ route('allkriteria.index') }}">
                                    <i class="mr-2 bi bi-card-list"> Kriteria</i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card text-white bg-success">
                        <div class="card-body">
                            <div class="pt-1">
                                <a class="text-white fs-6" href="{{ route('allalternatif.index') }}">
                                    <i class="mr-2 bi bi-blockquote-right"> Alternatif</i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card px-5 py-5 border border-grey-500">
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    <h4 class="m-b-20 p-b-5 b-b-default mt-3">Shops</h4>
                    <form action="{{ route('allshops.index') }}">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="search.." name="searchShop" value="{{ request('searchShop') }}">
                            <button class="btn btn-secondary" type="submit">Search</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-8">
                    <table class="table table-responsive table-hover">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">ID</th>
                                <th scope="col">Nama Pemilik</th>
                                <th scope="col">Nama Usaha</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($shop as $shop)
                                <tr class="text-center">
                                    <td>{{ $shop->id }}</td>
                                    <td>{{ $shop->nm_pu }}</td>
                                    <td>{{ $shop->nm_usaha }}</td>
                                    <td>{{ $shop->nik }}</td>
                                    <td>
                                        <a href="{{ route('allshops.show',$shop->id) }}" class="btn-sm btn-primary"><i class="bi bi-eye-fill" style="color: rgb(0, 0, 0);"></i></a>
                                        <a href="#" class="btn-sm btn-danger text-decoration-none" data-bs-toggle="modal" data-bs-target="#DeleteMs" style="color: rgb(0, 0, 0);"><i class="bi bi-trash-fill"></i></a>
                                        <form action="{{ route('allshops.destroy', $shop->id) }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <div class="modal fade" id="DeleteMs" tabindex="-1" aria-labelledby="DeleteMsLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="DeleteMsLabel">Confirmation</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Yakin Ingin Menghapus Toko Ini?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-primary">Confirm</button>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center h3">Data tidak ditemukan!</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
