@extends('layouts.app')
@section('content')
    <div class="container mt-4 text-white">
        <h4 class="my-4 text-white fs-7 text-start">{{ $pageTitle }}</h4>
        <hr>
        <div class="row py-4">
            <div class="col-5">
                <div class="text-center">
                    <img class="w-50 py-5" src="{{ Vite::asset('resources/images/barang.png') }}" alt="image">
                </div>
            </div>
            <div class="col-7">
                <div class="d-flex align-items-center py-2 px-4 bg-dark rounded-3 border border-secondary">
                    <div class="bi-house-fill me-3 fs-2 py-2"></div>
                    <h4 class="mb-0">Halo, Selamat Datang di {{ $pageTitle }} Data Master Barang.</h4>
                </div>
                <div class="d-flex align-items-center px-4 mt-3 bg-dark rounded-3 border border-secondary">
                    <p class="my-4 text-white-50 text-start">Master Barang -
                        Sumber Informasi data barang terkini yang relevan dan sebagai
                        pemenuhan Ujian Tengah Semester Mata Kuliah Pemrograman Framework.</p>
                </div>
                <div class="d-flex gap-3">
                    <a href="{{ route('welcome') }}" class="btn btn-outline-light fw-bold my-4 py-3 px-5"><i class="bi-arrow-left-circle me-2"></i> Welcome Page</a>
                    <a href="{{ route('barang.index') }}" class="btn btn-warning fw-bold my-4 py-3 px-5"><i class="bi bi-card-list me-2"></i> List Barang</a>
                </div>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
@endsection
