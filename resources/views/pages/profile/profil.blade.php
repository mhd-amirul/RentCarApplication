@extends('layouts.main')

@section('container')
{{-- @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif --}}
@if ($data->role === 'user')
    @if ($makeshop)
        @if ($makeshop->status == 'decline')
            <div class="row justify-content-center mt-5">
                <div class="col-lg-10">
                    <div class="card py-3 px-3 border border-gray-800">
                        <div class="row">
                            <div class="col-sm-10">
                                <h5 class="textde text-danger">Maaf Permintaan anda ditolak! {{ $makeshop->keterangan }}</h5>
                            </div>
                            <div class="col-sm-2">
                                <form action="{{ route('declinems',$makeshop->id) }}" method="POST" id="delete-form">
                                    @csrf
                                    @method('delete')
                                </form>
                                <a href="#" class="btn btn-sm btn-primary text-decoration-none w-100" id="delete">Confirm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @elseif ($makeshop->status == 'accept')
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content" style="width: 90%">
                    <div class="terms-box">
                        <div class="terms-text">
                            <h2>Terms Of Service</h2>
                            <p>Last Edit: 04/13/2022</p>
                            <p>Greetings Users,</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora aliquid sapiente iste exercitationem reiciendis sunt commodi architecto expedita corporis. Eos culpa molestias quidem dignissimos magnam hic voluptates alias, praesentium necessitatibus laborum eaque ea doloremque beatae esse odio unde aspernatur. Adipisci debitis asperiores dolores inventore accusamus accusantium ut eos suscipit aspernatur.</p>
                            <p>Vel fuga et fugit, delectus quis aspernatur autem inventore repudiandae eius officiis sequi laborum eveniet voluptatum? Fugiat quod vel obcaecati tenetur perferendis, laudantium debitis ullam sed temporibus dolor facere nobis magnam earum ducimus corrupti doloribus, quia aperiam ex commodi omnis itaque. Sint libero magni quidem laborum omnis velit minus reiciendis.</p>
                            <p>Doloremque dignissimos officia quam voluptate nesciunt suscipit explicabo aliquid obcaecati eius delectus! Corrupti sit odio, ipsum voluptatum numquam veritatis? Maiores nostrum, odit quos laboriosam dolorum error dignissimos voluptatibus, ad suscipit culpa possimus facilis quisquam inventore reprehenderit reiciendis esse quae magnam nobis ex vel voluptate vitae fugiat. Magnam repudiandae iure eius.</p>
                            <p>Fugit explicabo tempora pariatur dolor eaque cumque quidem neque. Perferendis placeat nobis sequi ad tempora suscipit itaque ratione consequuntur natus veniam eaque provident nam libero vitae quia, incidunt possimus labore similique eveniet nisi adipisci unde voluptatibus sunt. Asperiores quo voluptate animi aut impedit ut nam harum. Est deleniti optio eveniet.</p>
                            <p>Rerum dolores excepturi repellat sunt atque nihil distinctio qui, consectetur non ex, fugiat perspiciatis pariatur quasi voluptates eum libero corporis consequuntur quidem? Quas iusto exercitationem, doloribus velit voluptatibus porro. Itaque minima labore, voluptatibus accusamus magni dignissimos, suscipit maxime sunt ipsum deleniti temporibus necessitatibus at praesentium veniam cumque est quod fugit.</p>
                            <p>Sunt illo enim officia debitis commodi quibusdam voluptatem! Expedita sapiente velit exercitationem fugiat debitis atque consequuntur cupiditate nulla quae, voluptates hic ut illum laboriosam corporis et labore voluptatum pariatur temporibus. Illum iure impedit quos cupiditate voluptatem consequatur aliquam dolorum quia. Illum accusamus laudantium in a aliquid et, consequuntur quia possimus!</p>
                        </div>
                        <h4 class="mt-1">I Agree to the <span>Terms of Service</span> and I read the Privacy Notice.</h4>
                        <div class="buttons">
                            <form action="{{ route('updaterole') }}" method="get" id="acceptTerm-form" hidden>
                            </form>
                            <button class="btn2 red-btn2" type="submit" id="acceptTerm">Accept</button>
                            <button class="btn2 gray-btn2" data-dismiss="modal">Decline</button>
                        </div>
                    </div>
                </div>
                </div>
            </div>

            <div class="row justify-content-center mt-5">
                <div class="col-lg-10">
                    <div class="card py-3 px-3 border border-gray-800">
                        <div class="row">
                            <div class="col-sm-10">
                                <h5 class="textde text-success">Selamat Permintaan anda diterima! tekan next untuk langkah terakhir</h5>
                            </div>
                            <div class="col-sm-2">
                                <a href="#" class="btn btn-sm btn-primary text-decoration-none w-100" id="declineShop"  data-toggle="modal" data-target="#exampleModal">Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endif
@endif

<div class="row justify-content-center mb-5">
    <div class="col-sm-10">
        <div class="card mb-3">
            <div class="bg-dark text-center">
            </div>
        </div>
    </div>
    <div class="col-sm-10">
        <div class="card mb-3">
            <div class="bg-dark text-center">
                <img src="{{ isset($data->image) == null ? url('images/person.png') : asset('storage/' . $data->image) }}" width="300" class="my-3" style="clip-path: circle()">
            </div>

            <div class="card-body">
                <h4 class="card-title">Informasi Akun</h4>
                <hr class="m-0 p-0">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-floating mt-3">
                            <input type="text" class="form-control rounded-top" id="nm_pu" value="{{ $data->username }}">
                            <label for="nm_pu">Username</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating mt-3">
                            <input type="text" class="form-control rounded-top" id="nm_pu" value="+62 {{ $data->no_hp }}">
                            <label for="nm_pu">No Hp</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating mt-3">
                            <input type="text" class="form-control rounded-top" id="nm_pu" value="{{ $data->email }}">
                            <label for="nm_pu">Email</label>
                        </div>
                    </div>
                    <div class="row mt-4 mb-3 justify-content-start">
                        <div class="col-sm-12">
                            <a href="{{ route('profil.edit', $data->slug) }}" class="mt-1 btn btn-warning ml-1">
                                <i class="bi bi-pencil-square"></i></i> Edit Profil
                            </a>
                            <a href="{{ route('changePass', $data->slug) }}" class="ml-1 mt-1 btn btn-warning">
                                <i class="mr-2 bi bi-key"></i>Reset Password
                            </a>
                            @if ($data->role === 'rental')
                                <a href="{{ route('toko.index') }}" class="ml-1 mt-1 btn btn-warning">
                                    <i class="mr-2 bi bi-house-fill"></i>Toko
                                </a>
                            @elseif ($data->role === 'admin')
                                <a href="{{ route('dashboard.index') }}" class="ml-1 mt-1 btn btn-warning">
                                    <i class="mr-2 bi bi-shield-fill-exclamation"></i>Administrator
                                </a>
                            @elseif ($data->role === 'user')
                                @if ($makeshop)
                                    {{--  <a class="ml-1 mt-1 btn btn-warning">
                                        <i class="mr-2 bi bi-house-fill"></i>Diproses
                                    </a>  --}}
                                    @if ($makeshop->status == 'review')
                                        {{-- <a class="ml-1 mt-1 btn btn-sm">
                                            <marquee class="text-success" scrollamount="11"><h5>Harap menunggu! Pemintaan anda sedang diproses Admin!</h5></marquee>
                                        </a> --}}
                                        <a class="ml-1 mt-1 btn btn-danger text-white">
                                            Pendaftaran Berhasil! Pemintaan sedang diproses Admin!
                                        </a>
                                    @endif
                                @else
                                    <a href="{{ route('profil.create')}}" class="ml-1 mt-1 btn btn-warning">
                                        <i class="mr-2 bi bi-house-fill"></i>Buka Toko
                                    </a>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script-map')
    <script>
        $('#acceptTerm').on('click', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            Swal.fire({
                title: 'Are you sure ?',
                text: 'Agree to the Terms of Service and Privacy Notice  ?',
                icon: 'warning',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Confirm',
                showCancelButton: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#acceptTerm-form').submit();
                    // console.log(id)
                }
            })
        });

        $('#delete').on('click', function() {
            $('#delete-form').submit();
        })
    </script>
@endpush
