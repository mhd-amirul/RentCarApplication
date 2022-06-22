@extends('layouts.main')

@section('container')
    @if (session()->has('failed'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('failed') }} 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row justify-content-center mt-3">
        <div class="col-lg-5 mt-4">
            <main class="form-signin mt-5">
                <h1 class="h3 mb-3 fw-normal text-center">Ganti Password</h1>
                <form action="{{ route('updatePass', $user->id) }}" method="post">
                    @method('put')
                    @csrf
                    <div class="form-floating">
                        <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" value="{{ old('password') }}" required>
                        <label for="password">Old Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input name="newpassword" type="password" class="form-control @error('newpassword') is-invalid @enderror mb-0" id="newpassword" placeholder="New Password" value="{{ old('newpassword') }}" required>
                        <label for="newpassword">New Password</label>
                        @error('newpassword')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input name="confirmPassword" type="password" class="form-control mb-2 @error('confirmPassword') is-invalid @enderror" id="confirmPassword" placeholder="Confirm Password">
                        <label for="a">Confirm Password</label>
                        @error('confirmPassword')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="w-100 btn btn-lg btn-secondary" type="submit" onclick="return confirm('Yakin Ingin Mengubah?')">Update</button>
                </form>
            </main>
        </div>
    </div>
@endsection