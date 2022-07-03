@extends('layouts.main')

@section('container')
<div class="row justify-content-center mt-5">
    <div class="col-lg-6">
        <div class="card px-5 py-5 border border-gray-800">
            <main class="form-registration">
                <h1 class="h3 mb-3 fw-normal text-center">EDIT PROFIL</h1>
                <form action="{{ route('profil.update', $data->id) }}" method="post" enctype="multipart/form-data">
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
                    <div class="card mt-2 mb-2 bg-secondary text-white text-left">
                        <div class="card-body p-2">
                            <h6 class="card-title m-0">Foto Profil</h6>
                        </div>
                    </div>
                    <div class="custom-file">
                        <input type="hidden" name="oldimg" value="{{ $data->image }}">
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image">
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="modal fade" id="editShop" role="dialog" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="text-center" style="width:100%; padding:20px; text-align:center;">
                                        <img style="width:150px; height:auto; margin:0 auto; display:block; margin-bottom:25px;" src="{{ url('images/question.png') }}" alt="">
                                        <h1 style="font-size: 42px; margin-bottom: 25px; color:#5C5C5C;">Yakin Ingin Mengubah Profil?</h1>
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
                    <a href="#" class="w-100 btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#editShop">SUBMIT</a>
                </form>
            </main>
        </div>
    </div>
</div>
@endsection
