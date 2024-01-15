<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('assets/icons/icon.png')}}">
    <title>{{$senjata->nama}}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <link rel="stylesheet" href="../public/assets/css/show.css">
</head>
<body>
<!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-top">
        <div class="container">
            <a class="navbar-logo" href="{{ route('index') }}">Alutsista<span>Indonesia</span>.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="d-flex">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('senjata.index') }}">Back</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!-- navbar end -->
<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <h1 >{{$senjata->nama}}</h1>
            <a href="{{ route('senjata.edit',['senjata' => $senjata->id]) }}"
                class="btn btn-primary">Edit
            </a>
            <form action="{{ route('senjata.destroy',['senjata'=>$senjata->id]) }}"
                method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger ml-3">Hapus</button>
            </form>
            <ul style="list-style: none;">
                <li>Nama: {{$senjata->nama}} </li>
                <li>No. Seri: {{$senjata->no_seri}} </li>
                <li>Kapasitas: {{$senjata->tipe}} </li>
                <li>Kapasitas: {{$senjata->kapasitas}} </li>
                <li>Ukuran: {{$senjata->ukuran}} </li>
                <li>Berat: {{$senjata->berat}} </li>
                <li>Kecepatan: {{$senjata->kecepatan}} </li>
                <li>Kapasitas: {{$senjata->proteksi}} </li>
                <li>Status: {{$senjata->status}} </li>
                <li>Pemilik: {{$senjata->pemilik}} </li>
                <li>Sejarah: {{$senjata->sejarah}} </li>
                <li>Pemakaian: {{$senjata->pemakaian}} </li>
                <li><img src="{{url('')}}/{{$senjata->image}}" class="gambar" ></li>
            </ul>
        </div>
    </div>
</div>
<!-- Footer start -->
    <footer>
        <div class="socials">
            <a href="#"><i data-feather="instagram"></i></a>
            <a href="#"><i data-feather="twitter"></i></a>
            <a href="#"><i data-feather="facebook"></i></a>
        </div>

        <div class="credit">
            <p>Created by <a href="">PT.Bagus Karya</a>. | &copy; 2024.</p>
        </div>
    </footer>
    <!-- Footer end -->

    <!-- Feather Icons -->
    <script>
        feather.replace()
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>