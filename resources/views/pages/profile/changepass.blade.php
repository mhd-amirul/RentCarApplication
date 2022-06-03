@extends('layouts.main')

@section('container')
    <div class="row justify-content-center mt-5">
        <div class="col-lg-5 mt-4">
            <main class="form-signin mt-5">
                <h1 class="h3 mb-3 fw-normal text-center">Change Password</h1>
                <form action="{{ route('updatePass', $data->id) }}" method="post">
                    @method('put')
                    @csrf
                    <div class="form-floating">
                        <input name="password" type="password" class="form-control @error('password') is-invalid @enderror mb-0" id="password" placeholder="Password" value="{{ old('password') }}" required>
                        <label for="password">Password</label>
                        @error('password')
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
                    <button class="w-100 btn btn-lg btn-secondary" type="submit" onclick="return confirm('Yakin Ingin Mengubah?')">Change Password</button>
                </form>
            </main>
        </div>
    </div>
@endsection