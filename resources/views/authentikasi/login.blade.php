@extends('layouts.main')

@section('container')
    <div class="row justify-content-center mt-5">
        <div class="col-lg-5 mt-4">
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }} 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if (session()->has('errlog'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('errlog') }} 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <main class="form-signin mb-2">
                <div class="d-flex justify-content-center mb-3">
                    <img src="{{ url('images/person.png') }}" width="100" alt="">
                </div>
                <form action="login" method="post">
                    @csrf
                    <div class="form-floating">
                        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email" value="{{ old('email') }}" required>
                        <label for="email">Email</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input name="password" type="password" class="form-control" id="password" placeholder="password" required>
                        <label for="password">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-secondary" type="submit">Sign in</button>
                </form>
                <div class="row">
                    <div class="col">
                        <small class="d-block text-center mt-3">
                            Forgot Password?<a href="{{ route('forgotPass') }}"> Click Here!</a>
                        </small>
                    </div>
                    <div class="col">
                        <small class="d-block text-center mt-3">
                            Dont Have Account? <a href="register">Register Now!</a>
                        </small>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection