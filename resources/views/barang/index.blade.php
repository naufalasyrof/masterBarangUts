@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="my-3 text-white fs-7 text-start">{{ $pageTitle }}</h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="{{ route('barang.create') }}" class="btn btn-warning fw-bold my-4 py-2"><i class="bi bi-plus-circle-fill px-2"></i> Input Barang</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive border border-secondary p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped mb-0 table-dark">
                <thead>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Harga Barang</th>
                        <th>Deskripsi</th>
                        <th>Satuan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barangs as $barang)
                        <tr>
                            <td>{{ $barang->kodeBarang }}</td>
                            <td>{{ $barang->namaBarang }}</td>
                            <td>{{ $barang->harga }}</td>
                            <td>{{ $barang->deskripsi }}</td>
                            <td>{{ $barang->satuan->namaSatuan }}</td>
                            <td>
                                {{-- ACTIONS SECTION --}}
                                @include('barang.action')
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @vite('resources/js/app.js')
@endsection
