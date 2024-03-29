<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('assets/icons/icon.png')}}">
    <title>Alutsista Indonesia</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <link rel="stylesheet" href="public/assets/css/style.css">
</head>

<body>
<!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-top">
        <div class="container">
            <a class="navbar-logo" href="#">Alutsista<span>Indonesia</span>.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="d-flex" >
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('senjata.index') }}">Senjata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('kendaraan.index') }}">Kendaraan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('pinjam.index') }}">Riwayat Peminjaman</a>
                    </li>
                </ul>
                @auth
                    <form action="Route::get('/logout', [AdminController::class,'logout'])->name('login.logout');" method="post">
                        @csrf
                        <button class="btn btn-danger"><a class="nav-link active">Logout</a></button>
                @else
                    <button class="btn btn-danger"><a class="nav-link active" href="{{ route('login.index') }}">Masuk</a></button>
                @endauth
                </div>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- Hero Section start -->
    <section class="hero" id="home">
        <div class="container">
            <main class="content">
                <h1>Alutsista<span>Indonesia</span></h1>
                <p>Alat Utama Sistem Senjata Tentara Nasional Indonesia yang selanjutnya disebut Alutsista TNI adalah bagian dari Alpalhankam yang merupakan satu kesatuan sistem senjata secara terintegrasi atau bagian dari sistem senjata yang memiliki kemampuan
                    secara mandiri untuk digunakan dalam melaksanakan tugas pokok Tentara.</p>
            </main>
        </div>
    </section>
    <!-- Hero Section end -->

    <!-- Products Section start -->
    <section class="products" id="products">
        <h2><span>Koleksi</span>Kami</h2>
        <div class="row">
            @foreach ($senjatas as $senjata)
            <div class="product-card">
                <div class="product-image">
                    <img height="150px" src="{{url('')}}/{{$senjata->image}}" alt="Product 1" style="width: 30rem">
                </div>
                <div class="product-content">
                    <a href="{{ route('senjata.show',['senjata' => $senjata->id]) }}"><h3>{{$senjata->nama}}</h3></a>
                </div>
            </div>
            @endforeach
            @foreach ($kendaraans as $kendaraan)
            <div class="product-card">
                <div class="product-image">
                    <img src="{{url('')}}/{{$kendaraan->image}}" alt="Product 1" style="width: 30rem">
                </div>
                <div class="product-content">
                    <a href="{{ route('kendaraan.show',['kendaraan' => $kendaraan->id]) }}"><h3>{{$kendaraan->nama}}</h3></a>
                </div>
            </div>
            @endforeach
        </div>
    </section>
<!-- Products Section end -->
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