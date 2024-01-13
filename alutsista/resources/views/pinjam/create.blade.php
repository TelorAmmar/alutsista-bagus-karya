<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <title>Input Riwayat Peminjaman</title>
</head>
<body>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-8 col-xl-6">
                <h1>Input Riwayat Peminjaman</h1>
                <a href="../pinjam"
                    class="btn btn-primary">Back
                </a>
                <hr>
                <form action="{{ route('pinjam.store') }}" method="POST" enctype="multipart/form-data">
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
                        <input type="text"
                        class="form-control @error('tanggal_pinjam') is-invalid @enderror"
                        id="date" name="tanggal_pinjam" value="{{ old('tanggal_pinjam') }}">
                        @error('tanggal_pinjam')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tanggal_kembali">Tanggal Kembali</label>
                        <input type="text"
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
