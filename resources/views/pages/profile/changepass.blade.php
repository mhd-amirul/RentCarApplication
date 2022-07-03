@extends('layouts.main')

@section('container')
    <div class="row justify-content-center" style="margin-top: 2cm">
        <div class="col-lg-6">
        <div class="card py-5 px-5 border border-gray-800">
            <main class="form-signin">
                <h1 class="h3 mb-3 fw-normal text-center">RESET PASSWORD</h1>
                <form action="{{ route('updatePass', $user->id) }}" method="post">
                    @method('put')
                    @csrf
                    <div class="form-floating">
                        <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" value="{{ old('password') }}" required>
                        <label for="password">Password Lama</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input name="newpassword" type="password" class="form-control @error('newpassword') is-invalid @enderror mb-0" id="newpassword" placeholder="New Password" value="{{ old('newpassword') }}" required>
                        <label for="newpassword">Password Baru</label>
                        @error('newpassword')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input name="confirmPassword" type="password" class="form-control mb-2 @error('confirmPassword') is-invalid @enderror" id="confirmPassword" placeholder="Confirm Password">
                        <label for="a">Konfirmasi Password</label>
                        @error('confirmPassword')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="modal fade" id="changePass" role="dialog" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="text-center" style="width:100%; padding:20px; text-align:center;">
                                        <img style="width:150px; height:auto; margin:0 auto; display:block; margin-bottom:25px;" src="{{ url('images/question.png') }}" alt="">
                                        <h1 style="font-size: 42px; margin-bottom: 25px; color:#5C5C5C;">Yakin Ingin Mengganti Password?</h1>
                                        {{-- <p style="font-size: 20px; margin-bottom: 27px; color:#5C5C5C;"></p> --}}
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Confirm</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="w-100 btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#changePass">SUBMIT</a>
                </form>
            </main>
        </div>


        </div>
    </div>
@endsection
