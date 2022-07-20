@extends('layouts.main')

@section('container')
<div class="row justify-content-center mt-5">
    <div class="col-lg-8">
        <div class="card px-3 py-3 border border-gray-800">
            <div class="row justify-content-center">
                <div class="col-sm-6 mb-4">
                    <div style="max-height: 300px; overflow: hidden;">
                        <img src="{{ isset($users->image) == null ? url('images/notfound.png') : asset('storage/' . $users->image) }}" alt="{{ isset($users->image) == null ? url('images/notfound.png') : asset('storage/' . $users->image) }}" class="img-fluid">
                    </div>
                </div>
                <div class="row">
                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600 ">Information :</h6>
                    <div class="col-sm-6 mb-4">
                        <div class="form-floating">
                            <input disabled type="text" class="form-control rounded-top" id="nm_pu" value="{{ $users->username }}">
                            <label for="nm_pu">Username</label>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="form-floating">
                            <input disabled type="text" class="form-control rounded-top" id="nm_pu" value="{{ $users->email }}">
                            <label for="nm_pu">Email</label>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="form-floating">
                            <input disabled type="text" class="form-control rounded-top" id="nm_pu" value="{{ $users->no_hp }}">
                            <label for="nm_pu">No Hp</label>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="form-floating">
                            <input disabled type="text" class="form-control rounded-top" id="nm_pu" value="{{ $users->role }}">
                            <label for="nm_pu">Role</label>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="form-floating">
                            <input disabled type="text" class="form-control rounded-top" id="nm_pu" value="{{ $users->created_at }}">
                            <label for="nm_pu">Created At</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <a href="{{ route('allusers.index') }}" style="color: rgb(0, 0, 0);" class="btn btn-sm btn-primary">
                            <i class="bi bi-arrow-left-circle"></i> Back
                        </a>
                        <a href="{{ route('allusers.edit', $users->id) }}" class="btn btn-sm btn-warning">
                            <i class="bi bi-pencil-square"></i>
                        Edit
                        </a>
                        <form action="{{ route('allusers.destroy', $users->id) }}" method="post" class="d-inline" id="deleteUser-form">
                            @method('delete')
                            @csrf
                            <button class="btn btn-sm btn-danger border-0" style="color: rgb(0, 0, 0);" id="deleteUser">
                                <i class="bi bi-trash-fill"></i> Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('sweet')
    <script>
        $('#deleteUser').on('click', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            Swal.fire({
                title: 'Are you sure ?',
                text: 'Hapus user ini ?',
                icon: 'warning',
                confirmButtonColor: '#d33',
                cancelButtonColor: '#aaa',
                confirmButtonText: 'Confirm',
                showCancelButton: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#deleteUser-form').submit();
                }
            })
        });
    </script>
@endpush
