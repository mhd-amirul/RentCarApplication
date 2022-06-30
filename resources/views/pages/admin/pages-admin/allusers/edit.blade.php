@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-7 mt-4">
        <div class="card px-3 py-3 border border-gray-500">
            <div class="row justify-content-center mt-3">
                <div class="col-sm-7">
                    <main class="form-registration mb-5">
                        <h1 class="h3 mb-3 fw-normal text-center">EDIT USER</h1>
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

                            <div class="card mt-3 mb-2 bg-secondary text-white text-left">
                                <div class="card-body p-2">
                                    <h6 class="card-title m-0">Reset Password (opsional) :</h6>
                                </div>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="oldpassword" name="oldpassword" class="form-control @error('oldpassword') is-invalid @enderror" id="oldpassword" placeholder="Password Lama">
                                <label for="oldpassword">Password Lama</label>
                                @error('oldpassword')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password Baru">
                                <label for="password">Password Baru</label>
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="password" name="ConfirmPassword" class="form-control @error('ConfirmPassword') is-invalid @enderror" id="ConfirmPassword" placeholder="Konfirmasi Password">
                                <label for="ConfirmPassword">Konfirmasi Password</label>
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

                            <button class="w-100 btn btn-primary mt-4" onclick="return confirm('Yakin Ingin Mengubah?')"  type="submit">SUBMIT</button>
                        </form>
                    </main>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
