@extends('layouts.main')

@section('container')
<div class="row justify-content-center mt-5 mb-5">
    <div class="col-lg-8">
        <div class="card px-3 py-3 border border-gray-800">
            <div class="row justify-content-center mb-3">
                <div class="col-sm-7 mt-3 mb-4">
                    <main class="form-registration">
                        <h1 class="h3 mb-3 fw-normal text-center">TAMBAH USER</h1>
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
                            <button class="w-100 btn btn-primary mt-3" type="submit">SUBMIT</button>
                        </form>
                    </main>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
