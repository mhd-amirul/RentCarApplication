@extends('layouts.main')

@section('container')

<div class="row justify-content-center mt-5">
    <div class="col-lg-5 mt-4">
        <main class="form-registration mt-5 mb-5">
            <h1 class="h3 mb-3 fw-normal text-center">Edit User</h1>
            <form action="{{ route('allusers.update', $data->id) }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-floating">
                    <input type="email" name="email" class="form-control rounded-top @error('email') is-invalid @enderror" id="email" placeholder="Email" value="{{ old('email',$data->email) }}">
                    <label for="email">Email</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" value="{{ old('username',$data->username) }}">
                    <label for="username">Username</label>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="number" name="no_hp" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" placeholder="No Hp" value="{{ old('no_hp', $data->no_hp) }}">
                    <label for="no_hp">No Hp</label>
                    @error('no_hp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
                    <label for="password">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="ConfirmPassword" class="form-control @error('ConfirmPassword') is-invalid @enderror" id="ConfirmPassword" placeholder="Confirm Password">
                    <label for="ConfirmPassword">Confirm Password</label>
                    @error('ConfirmPassword')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="card mt-2 mb-2 bg-secondary text-white text-left">
                    <div class="card-body p-2">
                        <h6 class="card-title m-0">Upload :</h6>
                    </div>
                </div>

                <div class="custom-file">
                    <input type="hidden" name="oldimg" value="{{ $data->image }}">
                    <label for="image"><i class="bi bi-file-earmark-image"></i> Upload Profil</label>
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="card mt-4 mb-2 bg-secondary text-white text-left">
                    <div class="card-body p-2">
                        <h6 class="card-title m-0">Role :</h6>
                    </div>
                </div>
                <div class="">
                    <label for="role" class="">Akses</label>
                    <select name="role" id="role" class="form-control mb-3">
                        <option value="{{ old('role', $data->role) }}" selected hidden>{{ $data->role }}</option>
                        <option value="user">User</option>
                        <option value="rental">Pemilik Rental</option>
                        <option value="admin">Administrator</option>
                    </select>
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-3" onclick="return confirm('Yakin Ingin Mengubah?')"  type="submit">Update</button>
            </form>
        </main>
    </div>
</div>
@endsection