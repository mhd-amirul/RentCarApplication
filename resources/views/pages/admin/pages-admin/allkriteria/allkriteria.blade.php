@extends('layouts.main')

@section('container')
<div class="row justify-content-center mt-5">
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
                {{-- <div class="col-lg-2">
                    <div class="card text-white bg-secondary">
                        <div class="card-body">
                            <div class="pt-1">
                                <a class="text-white fs-6" href="{{ route('allkriteria.create') }}">
                                    <i class="mr-2 bi bi-plus-circle"> Add Kriteria</i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> --}}
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
                    <div class="card text-white bg-danger">
                        <div class="card-body">
                            <div class="pt-1">
                                <a class="text-white fs-6" href="{{ route('allshops.index') }}">
                                    <i class="mr-2 bi bi-house-fill"> Toko</i>
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
                    <h4 class="m-b-20 p-b-5 b-b-default mt-3">Kriteria : </h4>
                    <form action="{{ route('allkriteria.index') }}">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="search.." name="searchK" value="{{ request('searchK') }}">
                            <button class="btn btn-secondary" type="submit">Search</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
                    <table class="table table-responsive table-hover">
                        <thead>
                            <tr >
                                <th scope="col">ID</th>
                                <th scope="col">Nama Kriteria</th>
                                <th scope="col">Bobot</th>
                                <th scope="col">Type</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($kriteria as $kriteria)
                                <tr>
                                    <th scope="row">{{ $kriteria->id }}</th>
                                    <td>{{ $kriteria->nama }}</td>
                                    <td>{{ $kriteria->bobot }}</td>
                                    <td>{{ $kriteria->type }}</td>
                                    <td>
                                        {{-- @if ($kriteria->id == 1)
                                        @else --}}
                                            <a href="{{ route('allkriteria.edit', $kriteria->id) }}" class="btn-sm btn-warning" style="color: rgb(0, 0, 0);"><i class="bi bi-pencil-square"></i></i></a>
                                        {{-- @endif --}}
                                        {{-- <form action="{{ route('allkriteria.destroy', $kriteria->id) }}" method="post" class="d-inline" id="deleteKrit-form-{{ $kriteria->id }}">
                                            @method('delete')
                                            @csrf
                                            <a href="#" class="btn-sm btn-danger text-decoration-none" style="color: rgb(0, 0, 0);" id="deleteKrit" data-id="{{ $kriteria->id }}"><i class="bi bi-trash-fill"></i></a>
                                        </form> --}}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center h3">DATA KOSONG</td>
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

@push('sweet')
    <script>
        $(document).on('click', '#deleteKrit', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            Swal.fire({
                title: 'Are you sure ?',
                text: "Hapus kriteria ini ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#deleteKrit-form-'+id).submit();
                }
            })
        });
    </script>
@endpush
