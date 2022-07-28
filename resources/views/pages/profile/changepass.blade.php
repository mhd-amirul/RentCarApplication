@extends('layouts.main')

@section('container')
    <div class="row justify-content-center" style="margin-top: 2cm;margin-bottom: 3cm">
        <div class="col-lg-6">
        <div class="card py-5 px-5 border border-gray-800">
            <main class="form-signin">
                <h1 class="h3 mb-3 fw-normal text-center">Reset Password</h1>
                <form action="{{ route('updatePass', $user->slug) }}" method="post" id="changePass-form">
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
                    <button class="w-100 btn btn-sm btn-primary mt-3" id="changePass">SUBMIT</button>
                </form>
            </main>
        </div>
        </div>
    </div>
@endsection

@push('sweet')
    <script>
        $('#changePass').on('click', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            Swal.fire({
                title: 'Are you sure ?',
                text: 'Reset password akun ?',
                icon: 'warning',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Confirm',
                showCancelButton: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#changePass-form').submit();
                }
            })
        });
    </script>
@endpush
