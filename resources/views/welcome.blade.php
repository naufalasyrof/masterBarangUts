<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master - Data Barang</title>
    @vite('resources/sass/app.scss')
    @vite('resources/css/app.css')
</head>

<body class="bg-dark pt-5">
    <div class="container my-5">
        <div class="row px-5">
            <div class="col-5">
                <h1 class="my-4 text-white fs-7 text-start">Selamat Datang<br>di Master Barang</h1>
                <p class="my-4 text-white-50 text-start">Master Barang -
                    Sumber Informasi data barang terkini yang relevan dan sebagai
                pemenuhan Ujian Tengah Semester Mata Kuliah Pemrograman Framework.</p>
                <div class="d-grid gap-2">
                    <a class="btn btn-warning fw-bold py-2" href="{{ route('home') }}">Masuk ke Home</a>
                </div>
            </div>
            <div class="col-7 text-center">
                <img class="w-50 py-5" src="{{ Vite::asset('resources/images/barang.png') }}" alt="image">
            </div>
        </div>
        <div class="row px-5">
            <h1 class="my-4 text-white fs-7 text-start">Biodata Mahasiswa</h1>
        </div>
        <div class="row px-5 text-white">
            <div class="col-4 pt-3">
                <img class="w-75 py-5" align="left" src="{{ Vite::asset('resources/images/profil.png') }}" alt="image">
            </div>
            <div class="col-8 ">
                <h3 class="pt-5 pb-2">Nama</h3>
                <h6 class="align-items-center py-3 px-4 rounded-3 border border-secondary">Hayu Faiz Naufal Asyrof</h6>
                <h3 class="pt-4 pb-2">NIM</h3>
                <h6 class="align-items-center py-3 px-4 rounded-3 border border-secondary">1204200088</h6>
                <h3 class="pt-4 pb-2">Program Studi</h3>
                <h6 class="d-flex align-items-center py-3 px-4 rounded-3 border border-secondary">Sistem Informasi - IS 03-05</h6>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>

</html>
