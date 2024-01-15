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

    <link rel="stylesheet" href="../../public/assets/css/inputkendaraan.css">
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
                        <a class="nav-link active" href="{{ route('kendaraan.index') }}">Back</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!-- navbar end -->
<!-- form Section start -->
<form action="{{ route('kendaraan.update') }}" method="POST" class="form" enctype="multipart/form-data">
    @csrf
    <div class="nama-alutsista">
        <label for="nama">Nama Kendaraan</label>
        <input type="text"
        class="form-control @error('nama') is-invalid @enderror"
        id="nama" name="nama" value="{{ old('nama') ?? $kendaraan->nama  }}">
        @error('nama')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="nomor-seri">
        <label for="no_seri">Nomor Seri</label>
        <input type="text"
        class="form-control @error('no_seri') is-invalid @enderror"
        id="no_seri" name="no_seri" value="{{ old('no_seri') ?? $kendaraan->no_seri }}">
        @error('no_seri')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="tipe">
        <label for="tipe">Tipe</label>
        <input type="text"
        class="form-control @error('tipe') is-invalid @enderror"
        id="tipe" name="tipe" value="{{ old('tipe') ?? $kendaraan->tipe  }}">
        @error('tipe')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="kapasitas">
        <label for="kapasitas">Kapasitas</label>
        <input type="text"
        class="form-control @error('kapasitas') is-invalid @enderror"
        id="kapasitas" name="kapasitas" value="{{ old('kapasitas') ?? $kendaraan->kapasitas }}">
        @error('kapasitas')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="ukuran">
        <label for="ukuran">Ukuran</label>
        <input type="text"
        class="form-control @error('ukuran') is-invalid @enderror"
        id="ukuran" name="ukuran" value="{{ old('ukuran') ?? $kendaraan->ukuran }}">
        @error('ukuran')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="berat">
        <label for="berat">Berat</label>
        <input type="text"
        class="form-control @error('berat') is-invalid @enderror"
        id="berat" name="berat" value="{{ old('berat') ?? $kendaraan->berat  }}">
        @error('berat')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="kecepatan">
        <label for="kecepatan">Kecepatan</label>
        <input type="text"
        class="form-control @error('kecepatan') is-invalid @enderror"
        id="kecepatan" name="kecepatan" value="{{ old('kecepatan') ?? $kendaraan->kecepatan }}">
        @error('kecepatan')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="proteksi">
        <label for="proteksi">Proteksi</label>
        <input type="text"
        class="form-control @error('proteksi') is-invalid @enderror"
        id="proteksi" name="proteksi" value="{{ old('proteksi') ?? $kendaraan->proteksi }}">
        @error('proteksi')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="status-kondisi">
        <label for="status">Status</label>
        <input type="text"
        class="form-control @error('status') is-invalid @enderror"
        id="status" name="status" value="{{ old('status') ?? $kendaraan->status }}">
        @error('status')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="pemilik-lokasi">
        <label for="pemilik">Pemilik</label>
        <input type="text"
        class="form-control @error('pemilik') is-invalid @enderror"
        id="pemilik" name="pemilik" value="{{ old('pemilik') ?? $kendaraan->pemilik }}">
        @error('pemilik')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="sejarah-pemeliharaan">
        <label for="sejarah">Sejarah</label>
        <textarea class="form-control" id="sejarah" rows="3"
        name="sejarah">{{ old('sejarah') ?? $kendaraan->sejarah }}</textarea>
    </div>
    <div class="pemakaian-riwayat-operasi">
        <label for="pemakaian">Pemakaian</label>
        <textarea class="form-control" id="pemakaian" rows="3"
        name="pemakaian">{{ old('pemakaian') ?? $kendaraan->pemakaian }}</textarea>
    </div>
    <div class="tambah-gambar">
        <label for="image">Gambar</label>
        <input type="file" class="form-control-file" id="image" name="image">
        @error('image')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary mb-2">Submit</button>
</form>
<!-- form Section end -->

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