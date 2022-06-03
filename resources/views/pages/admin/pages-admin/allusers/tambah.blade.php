@extends('layouts.main')

@section('container')
<div class="row justify-content-center mt-5 mb-5">
    <div class="col-lg-5 mt-4">
        <main class="form-registration mt-5">
            <h1 class="h3 mb-3 fw-normal text-center">Tambah User</h1>
            <form action="{{ route('allusers.store') }}" method="post">
                @csrf
                <div class="form-floating">
                    <input type="email" name="email" class="form-control rounded-top @error('email') is-invalid @enderror" id="email" placeholder="Email" value="{{ old('email') }}" required>
                    <label for="email">Email</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" value="{{ old('username') }}" required>
                    <label for="username">Username</label>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="number" name="no_hp" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" placeholder="No Hp" value="{{ old('no_hp') }}" required>
                    <label for="no_hp">No Hp</label>
                    @error('no_hp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" value="{{ old('password') }}" required>
                    <label for="password">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="confirmpassword" class="form-control rounded-bottom @error('confirmpassword') is-invalid @enderror" id="confirmpassword" placeholder="Konfirmasi Password" required>
                    <label for="confirmpassword">Konfirmasi Password</label>
                    @error('confirmpassword')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="card mt-2 mb-2 bg-secondary text-white text-left">
                    <div class="card-body p-2">
                        <h6 class="card-title m-0">Pilih Akses :</h6>
                    </div>
                </div>
                <div class="">
                    <label for="role" class="">Akses</label>
                    <select name="role" id="role" class="form-control mb-3">
                        <option value="user" selected>User</option>
                        <option value="rental">Pemilik Rental</option>
                        <option value="admin">Administrator</option>
                    </select>
                </div>
                <button class="w-100 btn btn-lg btn-secondary mt-3" type="submit">Tambah</button>
            </form>
        </main>
    </div>
</div>
@endsection