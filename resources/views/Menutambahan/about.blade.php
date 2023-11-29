@extends('layouts.master')
@push('style')
@endpush
@section('judul')
Aplikasi Data Penjualan
@endsection
@section('judul_sub')
Menu Tambahan
@endsection
@section('content')
<div class="row align-items-center">
    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
        <div id="examples" class="mb-4">
            <h2>Rancang Bangun Aplikasi Pengelolaan Atribut</h2>
        </div>
        <!-- Bg -->
        <div class="pt-20 rounded-top" style="background:
                    url(../assets/images/background/profile-cover.jpg) no-repeat;
                    background-size: cover;">
        </div>
        <div class="bg-white rounded-bottom smooth-shadow-sm ">
            <div class="d-flex align-items-center justify-content-between
                      pt-4 pb-6 px-4">
                <div class="d-flex align-items-center">
                    <!-- avatar -->
                    <div class="avatar-xxl me-2
                          position-relative d-flex justify-content-end
                          align-items-end mt-n10">
                        <img src="{{ asset('/assets') }}/images/my-img/1.jpg" class="avatar-xxl
                            rounded-circle border border-4 border-white-color-40" alt="">
                    </div>
                    <!-- text -->
                    <div class="lh-1">
                        <h2 class="mb-0">Waqyu Setiadi
                        </h2>
                        <h5>1197050130</h5>
                    </div>
                </div>
            </div>
            <!-- nav -->

        </div>
    </div>
</div>
<!-- content -->
<div class="py-6">
    <!-- row -->
    <div class="row">
        <div>
            <!-- card -->
            <div class="card">
                <!-- card body -->
                <div class="card-body">
                    <!-- card title -->
                    <h4 class="card-title mb-4">Tentang Saya</h4>
                    <span class="text-uppercase fw-medium text-dark
                          fs-5 ls-2">Bio</span>
                    <!-- text -->
                    <p class="mt-2 mb-6">Menempuh Pendidikan S-1 Di Jurusan Teknik Informatika Universitas Islam Negeri Sunan Gunung Djati Bandung</p>
                    <!-- row -->
                    <div class="row">
                        <div class="col-12 mb-5">
                            <!-- text -->

                        </div>
                        <div class="col-6 mb-5">
                            <h6 class="text-uppercase fs-5 ls-2">Phone </h6>
                            <p class="mb-0">087731407495</p>
                        </div>
                        <div class="col-6 mb-5">
                            <h6 class="text-uppercase fs-5 ls-2">Date of Birth </h6>
                            <p class="mb-0">22 - 07 - 2000</p>
                        </div>
                        <div class="col-6">
                            <h6 class="text-uppercase fs-5 ls-2">Email </h6>
                            <p class="mb-0">swaqyu@gmail.com</p>
                        </div>
                        <div class="col-6">
                            <h6 class="text-uppercase fs-5 ls-2">Location
                            </h6>
                            <p class="mb-0">Indonesia, Jawa Barat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
</div>

@push('scripts')
@endpush
@endsection
