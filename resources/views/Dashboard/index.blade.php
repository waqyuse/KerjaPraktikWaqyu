@extends('layouts.master')
@push('style')
@endpush
@section('judul')
Aplikasi Pengelolaan Atribut
@endsection
@section('judul_sub')
Dashboard
@endsection
@section('content')
<div class="bg-dark pt-10 pb-21"></div>
<div class="container-fluid mt-n22 px-6">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <!-- Page header -->
            <div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="mb-2 mb-lg-0">
                        <h3 class="mb-0 fw-bold text-white">Aplikasi Pengelolaan Atribut</h3>
                    </div>

                    <form action="/send-telegram-message" method="post">
                        <!-- Isi formulir -->
                        @csrf
                        <button type="submit">Kirim</button>
                    </form>


                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">

            <!-- card -->
            <div class="card rounded-3" style="width: 200px; height:300px;">
                <!-- card body -->
                <div class="card-body">
                    <!-- heading -->
                    <div class="d-flex justify-content-between align-items-center
                    mb-3">
                        <div>
                            <h4 class="mb-0">Jenis Data Atribut</h4>
                        </div>
                        <div class="icon-shape icon-md bg-light-primary text-dark
                      rounded-1">
                            <i data-feather="database" class="fs-4"></i>
                        </div>

                    </div>
                    <!-- project number -->
                    <div>
                        <h1 class="fw-bold">{{ $jpenjualancount }}</h1>
                        <p class="mb-0">Jumlah Jenis Data
                            Penjualan
                        </p>
                    </div>
                    <div class="mt-5">
                        <a href="{{ route('jenis-penjualan.index') }}" class="btn btn-dark">Menu Jenis Data Atribut</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">

            <!-- card -->
            <div class="card rounded-3" style="width: 200px; height:300px;">
                <!-- card body -->
                <div class="card-body">
                    <!-- heading -->
                    <div class="d-flex justify-content-between align-items-center
                    mb-3">
                        <div>
                            <h4 class="mb-0">Data Atribut</h4>
                        </div>
                        <div class="icon-shape icon-md bg-light-primary text-dark
                      rounded-1">
                            <i data-feather="database" class="fs-4"></i>
                        </div>
                    </div>
                    <!-- project number -->
                    <div>
                        <h1 class="fw-bold">{{ $bpenjualancount }}</h1>
                        <p class="mb-0">Jumlah Penjualan Data Atribut</p>
                    </div>
                    <div class="mt-5">
                        <a href="{{ route('barang-penjualan.index') }}" class="btn btn-dark">Menu Data Atribut</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
            <!-- card -->
            <div class="card rounded-3" style="width: 200px; height:300px;">
                <!-- card body -->
                <div class="card-body">
                    <!-- heading -->
                    <div class="d-flex justify-content-between align-items-center
                    mb-3">
                        <div>
                            <h4 class="mb-0">Data Master Atribut</h4>
                        </div>
                        <div class="icon-shape icon-md bg-light-primary text-dark
                      rounded-1">
                            <i data-feather="database" class="fs-4"></i>
                        </div>
                    </div>
                    <!-- project number -->
                    <div>
                        <h1 class="fw-bold">{{ $mpenjualancount }}</h1>
                        <p class="mb-0">Jumlah Master Data
                            Penjualan Atribut
                        </p>
                    </div>
                    <div class="mt-5">
                        <a href="{{ route('master-penjualan.index') }}" class="btn btn-dark">Menu Master Atribut</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
            <!-- card -->
            <div class="card rounded-3" style="width: 200px; height:300px;">
                <!-- card body -->
                <div class="card-body">
                    <!-- heading -->
                    <div class="d-flex justify-content-between align-items-center
                    mb-3">
                        <div>
                            <h4 class="mb-0">Data Transaksi Atribut</h4>
                        </div>
                        <div class="icon-shape icon-md bg-light-primary text-dark
                      rounded-1">
                            <i data-feather="database" class="fs-4"></i>
                        </div>
                    </div>
                    <!-- project number -->
                    <div>
                        <h1 class="fw-bold">{{ $wtransaksicount }}</h1>
                        <p class="mb-0">Jumlah Log Data
                            Transaksi Atribut</p>
                    </div>
                    <div class="mt-5">
                        <a href="{{ route('transaksi-penjualan.index') }}" class="btn btn-dark">Menu Transaksi Atribut</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
            <!-- card -->
            <div class="card rounded-3" style="width: 200px; height:300px;">
                <!-- card body -->
                <div class="card-body">
                    <!-- heading -->
                    <div class="d-flex justify-content-between align-items-center
                        mb-3">
                        <div>
                            <h4 class="mb-0">Stok Barang Terbanyak</h4>
                        </div>
                        <div class="icon-shape icon-md bg-light-primary text-dark
                          rounded-1">
                            <i data-feather="database" class="fs-4"></i>
                        </div>

                    </div>
                    <!-- project number -->
                    <div>
                        <h1 class="fw-bold">{{ $maxstok }}</h1>
                        <p class="mb-0"><span class="text-dark me-2">{{ $maxstok }}</span>Jumlah Stok Barang
                            Terbanyak
                        </p>
                    </div>
                    <div class="mt-5">
                        <a href="{{ route('jenis-penjualan.index') }}" class="btn btn-dark">Menu Transaksi</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
            <!-- card -->
            <div class="card rounded-3" style="width: 200px; height:300px;">
                <!-- card body -->
                <div class="card-body">
                    <!-- heading -->
                    <div class="d-flex justify-content-between align-items-center
                        mb-3">
                        <div>
                            <h4 class="mb-0">Barang Terjual Terbanyak</h4>
                        </div>
                        <div class="icon-shape icon-md bg-light-primary text-dark
                          rounded-1">
                            <i data-feather="database" class="fs-4"></i>
                        </div>
                    </div>
                    <!-- project number -->
                    <div>
                        <h1 class="fw-bold">{{ $maxterjual }}</h1>
                        <p class="mb-0"><span class="text-dark me-2">{{ $maxterjual }}</span>Jumlah Barang Data
                            Penjualan</p>
                    </div>
                    <div class="mt-5">
                        <a href="{{ route('barang-penjualan.index') }}" class="btn btn-dark">Menu Transaksi</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
            <!-- card -->
            <div class="card rounded-3" style="width: 200px; height:300px;">
                <!-- card body -->
                <div class="card-body">
                    <!-- heading -->
                    <div class="d-flex justify-content-between align-items-center
                        mb-3">
                        <div>
                            <h4 class="mb-0">Stok Barang Terendah</h4>
                        </div>
                        <div class="icon-shape icon-md bg-light-primary text-dark
                          rounded-1">
                            <i data-feather="database" class="fs-4"></i>
                        </div>
                    </div>
                    <!-- project number -->
                    <div>
                        <h1 class="fw-bold">{{ $minstok }}</h1>
                        <p class="mb-0"><span class="text-dark me-2">{{ $minstok }}</span>Jumlah Stok Barang
                            Terendah
                        </p>
                    </div>
                    <div class="mt-5">
                        <a href="{{ route('master-penjualan.index') }}" class="btn btn-dark">Menu Transaksi</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
            <!-- card -->
            <div class="card rounded-3" style="width: 200px; height:300px;">
                <!-- card body -->
                <div class="card-body">
                    <!-- heading -->
                    <div class="d-flex justify-content-between align-items-center
                        mb-3">
                        <div>
                            <h4 class="mb-0">Barang Terjual Terendah</h4>
                        </div>
                        <div class="icon-shape icon-md bg-light-primary text-dark
                          rounded-1">
                            <i data-feather="database" class="fs-4"></i>
                        </div>
                    </div>
                    <!-- project number -->
                    <div>
                        <h1 class="fw-bold">{{ $minterjual }}</h1>
                        <p class="mb-0"><span class="text-dark me-2">{{ $minterjual }}</span>Jumlah Barang Terjual
                            Terendah</p>
                    </div>
                    <div class="mt-5">
                        <a href="{{ route('transaksi-penjualan.index') }}" class="btn btn-dark">Menu Transaksi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row my-6">
    </div>
</div>

@push('scripts')
@endpush
@endsection
