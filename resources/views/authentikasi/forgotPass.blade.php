@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7" style="margin-bottom: 3cm; margin-top: 2cm;">
            <div class="card px-3 py-3 border border-gray-800">
                <div class="row justify-content-center mb-5">
                    <div class="col-sm-7">
                        <form action="" method="POST" autocomplete="">
                            @csrf
                            <h2 class="text-center mt-5">Forgot Password</h2>
                            <p class="text-center">Enter your email address</p>

                            <div class="form-floating">
                                <input name="email" type="email" class="mb-3 form-control @error('email') is-invalid @enderror" id="email" placeholder="email" value="{{ old('email') }}" required>
                                <label for="email">Email</label>
                                @error('email')
                                    <div class="invalid-feedback mb-2 mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button class="w-100 btn btn-primary" type="submit">SUBMIT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
