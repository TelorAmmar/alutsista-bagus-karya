<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('assets/icons/icon.png')}}">
    <title>Alutsista Indonesia</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <link rel="stylesheet" href="../public/assets/css/pinjam.css">
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
                        <a class="nav-link active" href="{{ route('pinjam.index') }}">Back</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!-- navbar end -->
                <form action="{{ route('pinjam.store') }}" method="POST" class="form" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="peminjam">Peminjam</label>
                        <input type="text"
                        class="form-control @error('peminjam') is-invalid @enderror"
                        id="peminjam" name="peminjam" value="{{ old('peminjam') }}">
                        @error('peminjam')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alutsista">Nama Alutsista</label>
                        <input type="text"
                        class="form-control @error('alutsista') is-invalid @enderror"
                        id="alutsista" name="alutsista" value="{{ old('alutsista') }}">
                        @error('alutsista')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kondisi">Kondisi</label>
                        <textarea class="form-control" id="kondisi" rows="3"
                        name="kondisi">{{ old('kondisi') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="catatan">Catatan</label>
                        <textarea class="form-control" id="catatan" rows="3"
                        name="catatan">{{ old('catatan') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status"
                                id="masih_dipinjam" value="P"
                                {{ old('status')=='L' ? 'checked': '' }} >
                                <label class="form-check-label" for="masih_dipinjam">Belum Dikembalikan</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status"
                                id="dikembalikan" value="P"
                                {{ old('status')=='P' ? 'checked': '' }} >
                                <label class="form-check-label" for="dikembalikan">Sudah Dikembalikan</label>
                            </div>
                            @error('status')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_pinjam">Tanggal Pinjam</label>
                        <input type="date"
                        class="form-control @error('tanggal_pinjam') is-invalid @enderror"
                        id="date" name="tanggal_pinjam" value="{{ old('tanggal_pinjam') }}">
                        @error('tanggal_pinjam')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tanggal_kembali">Tanggal Kembali</label>
                        <input type="date"
                        class="form-control @error('tanggal_kembali') is-invalid @enderror"
                        id="date" name="tanggal_kembali" value="{{ old('tanggal_kembali') }}">
                        @error('tanggal_kembali')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                </form>
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
<script>
    $(document).ready(function() {            
        $('#date').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
        }); 
    });
</script>
</html>