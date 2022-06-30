@extends('layouts.main')

@section('container')
    <div class="row justify-content-center mt-5">
        <div class="col-lg-9 mt-4">
            <main class="form-signin mb-2">
                <div class="card px-3 py-3 border border-gray-800">
                    <div class="row justify-content-center mb-5">
                        <div class="col-sm-7">
                            <div class="d-flex justify-content-center mb-3">
                                <img src="{{ url('images/person.png') }}"  width="300" alt="">
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
                                <button class="w-100 btn btn-primary" type="submit">LOG IN</button>
                            </form>
                            <div class="row">
                                <div class="col">
                                    <small class="d-block text-center mt-3">
                                        Forgot Password?<a href="{{ route('forgotPass') }}"> Click Here!</a>
                                    </small>
                                </div>
                                <div class="col">
                                    <small class="d-block text-center mt-3">
                                        Dont Have Account? <a href="register">Create Now!</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
