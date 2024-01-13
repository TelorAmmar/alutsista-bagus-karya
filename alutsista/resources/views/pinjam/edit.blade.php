<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Edit Riwayat Peminjaman</title>
    </head>
    <body>
        <div class="container pt-4 bg-white">
            <div class="row">
                <div class="col-md-8 col-xl-6">
                    <h1>Edit Riwayat Peminjaman</h1>
                    <a href="../../pinjam"
                        class="btn btn-primary">Back
                    </a>
                    <hr>
                    <form action="{{ route('pinjam.update',['pinjam' => $pinjam->id]) }}" method="POST" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div class="form-group">
                            <label for="peminjam">Nama Peminjam</label>
                            <input type="text"
                            class="form-control @error('peminjam') is-invalid @enderror"
                            id="peminjam" name="peminjam" value="{{ old('name') ?? $pinjam->peminjam }}">
                            @error('peminjam')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        </div>
                    <div class="form-group">
                        <label for="alutsista">Nama Alutsista</label>
                        <input type="text"
                        class="form-control @error('alutsista') is-invalid @enderror"
                        id="alutsista" name="alutsista" value="{{ old('alutsista') ?? $pinjam->alutsista }}">
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
                                {{ (old('status') ?? $pinjam->status)
                                    == 'L' ? 'checked': '' }} >
                                <label class="form-check-label" for="masih_dipinjam">Belum Dikembalikan</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status"
                                id="dikembalikan" value="P"
                                {{ (old('status') ?? $pinjam->status)
                                    == 'P' ? 'checked': '' }} >
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
                        id="date" name="tanggal_pinjam" value="{{ old('tanggal_pinjam') ?? $pinjam->tanggal_pinjam }}">
                        @error('tanggal_pinjam')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tanggal_kembali">Tanggal Kembali</label>
                        <input type="text"
                        class="form-control @error('tanggal_kembali') is-invalid @enderror"
                        id="date" name="tanggal_kembali" value="{{ old('tanggal_kembali') ?? $pinjam->tanggal_kembali }}">
                        @error('tanggal_kembali')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                            <button type="submit" class="btn btn-primary mb-2">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>