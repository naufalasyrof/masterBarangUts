@extends('layouts.app')
@section('content')
    <form action="{{ route('barang.update', ['barang' => $barang->id]) }}" class="p-5" method="POST">
        @csrf
        @method('put')
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-6">
                <div class="mb-3 text-center">
                    <i class="bi bi-box-seam fs-1"></i>
                    <h4 class="py-2 fw-semibold">Input Barang</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="KodeBarang" class="form-label fw-medium">Kode Barang</label>
                        <input class="form-control @error('KodeBarang') is-invalid @enderror" type="text"
                            name="KodeBarang"
                            id="KodeBarang"value="{{ $errors->any() ? old('KodeBarang') : $barang->kodeBarang }}"
                            placeholder="Enter Kode Barang">
                        @error('KodeBarang')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="NamaBarang" class="form-label fw-medium">Nama Barang</label>
                        <input class="form-control @error('NamaBarang') is-invalid @enderror" type="text"
                            name="NamaBarang" id="NamaBarang"
                            value="{{ $errors->any() ? old('NamaBarang') : $barang->namaBarang }}"
                            placeholder="Enter Nama Barang">
                        @error('NamaBarang')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="HargaBarang" class="form-label fw-medium">Harga Barang</label>
                        <input class="form-control @error('HargaBarang') is-invalid @enderror" type="number"
                            name="HargaBarang" id="HargaBarang"
                            value="{{ $errors->any() ? old('HargaBarang') : $barang->harga }}"
                            placeholder="Enter Harga Barang">
                        @error('HargaBarang')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="DeskripsiBarang" class="form-label fw-medium">Deskripsi Barang</label>
                        <input class="form-control @error('DeskripsiBarang') is-invalid @enderror" type="text"
                            name="DeskripsiBarang" id="DeskripsiBarang"
                            value="{{ $errors->any() ? old('DeskripsiBarang') : $barang->deskripsi }}"
                            placeholder="Enter DeskripsiBarang">
                        @error('DeskripsiBarang')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="satuan" class="form-label fw-medium">Satuan</label>
                        <select name="satuan" id="satuan" class="form-select">
                            @php
                                $selected = '';
                                if ($errors->any()) {
                                    $selected = old('satuan');
                                } else {
                                    $selected = $barang->satuan_id;
                                }
                            @endphp
                            @foreach ($satuans as $satuan)
                                <option value="{{ $satuan->id }}" {{ $selected == $satuan->id ? 'selected' : '' }}>
                                    {{ $satuan->kodeSatuan . ' - ' . $satuan->namaSatuan }}</option>
                            @endforeach
                        </select>
                        @error('position')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 d-grid">
                        <a href="{{ route('barang.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                class="bi-arrow-left-circle me-2"></i> Cancel</a>
                    </div>
                    <div class="col-md-6 d-grid">
                        <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i>
                            Edit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @vite('resources/js/app.js')
@endsection
