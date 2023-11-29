@extends('layouts.master')
@push('style')
@endpush
@section('judul')
Aplikasi Pengelolaan Atribut
@endsection
@section('judul_sub')
Menu Pengelolaan Data Atribut
@endsection
@section('content')
<div class="py-6">
    <div class="row mb-6">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div id="examples" class="mb-4">
                <h2>Pengelolaan Data Atribut</h2>
            </div>
            <div class="card">
                <div class="d-flex justify-content-around mt-3 mb-3 ms-3 me-3">
                    <div class="col-6 ms-4">
                        <a href="{{ route('barang-penjualan.create') }}"
                            class="m-2 btn btn-outline-success my-1 btn-sm">
                            <i data-feather="plus"></i> Tambah Data
                        </a>
                    </div>
                    <div class="col-6 me-4">
                        <form action="/barang-penjualan" class="d-flex align-items-end">
                            <input type="text" class="form-control" placeholder="Cari Data" name="search"
                                value="{{ request('search') }}" />
                            <div class="ms-2 me-2">
                                <button type="submit" class="btn btn-dark">Cari</button>
                            </div>
                        </form>
                    </div>
                </div>
                <hr>
                <!-- Tab content -->
                <div class="tab-content p-4" id="pills-tabContent-table">
                    <div class="tab-pane tab-example-design fade show
                      active" id="pills-table-design" role="tabpanel" aria-labelledby="pills-table-design-tab">
                        <!-- Basic table -->
                        <div class="table-responsive">
                            <table class="table table-striped text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Atribut</th>
                                        <th scope="col">Jenis Atribut</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bpenjualan as $item => $key)
                                    <tr>
                                        <th scope="row">{{ $item + 1 }}</th>
                                        <td>{{ $key->nama_barang }}</td>
                                        <td>{{ $key->jenis_penjualan->jenis_penjualan }}</td>
                                        <td>
                                            <a href="/barang-penjualan/{{ $key->id }}/edit"
                                                class="btn btn-outline-warning my-1 btn-sm">
                                                <i data-feather="edit"></i>
                                            </a>
                                            <form action="/barang-penjualan/{{$key->id}}" method="POST"
                                                class="display-non">
                                                @csrf
                                                @method('DELETE')
                                                <button type=" submit" class="btn btn-outline-danger my-1 btn-sm"
                                                    value="Delete">
                                                    <i data-feather="trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div>
                                <div class="d-flex justify-content-end">
                                    {{ $bpenjualan->links('vendor.pagination.custom') }}
                                </div>
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
