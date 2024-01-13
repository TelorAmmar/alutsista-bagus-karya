<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Edit Kendaraan</title>
    </head>
    <body>
        <div class="container pt-4 bg-white">
            <div class="row">
                <div class="col-md-8 col-xl-6">
                    <h1>Edit Kendaraan</h1>
                    <hr>
                    <form action="{{ route('kendaraan.update',['kendaraan' => $kendaraan->id]) }}" method="POST" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Kendaraan</label>
                            <input type="text"
                            class="form-control @error('nama') is-invalid @enderror"
                            id="nama" name="nama" value="{{ old('name') ?? $kendaraan->nama }}">
                            @error('nama')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="no_seri">Nomor Seri</label>
                            <input type="text"
                            class="form-control @error('no_seri') is-invalid @enderror"
                            id="no_seri" name="no_seri" value="{{ old('no_seri') ?? $kendaraan->no_seri }}">
                            @error('no_seri')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                            <div class="form-group">
                            <label for="tipe">Tipe</label>
                            <input type="text"
                            class="form-control @error('tipe') is-invalid @enderror"
                            id="tipe" name="tipe" value="{{ old('tipe') ?? $kendaraan->tipe }}">
                            @error('tipe')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="kapasitas">Kapasitas</label>
                            <input type="text"
                            class="form-control @error('kapasitas') is-invalid @enderror"
                            id="kapasitas" name="kapasitas" value="{{ old('kapasitas') ?? $kendaraan->kapasitas }}">
                            @error('kapasitas')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="ukuran">Ukuran</label>
                            <input type="text"
                            class="form-control @error('ukuran') is-invalid @enderror"
                            id="ukuran" name="ukuran" value="{{ old('ukuran') ?? $kendaraan->ukuran }}">
                            @error('ukuran')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="berat">Berat</label>
                            <input type="text"
                            class="form-control @error('berat') is-invalid @enderror"
                            id="berat" name="berat" value="{{ old('berat') ?? $kendaraan->berat }}">
                            @error('berat')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="kecepatan">Kecepatan</label>
                            <input type="text"
                            class="form-control @error('kecepatan') is-invalid @enderror"
                            id="kecepatan" name="kecepatan" value="{{ old('kecepatan') ?? $kendaraan->kecepatan }}">
                            @error('kecepatan')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="proteksi">Proteksi</label>
                            <input type="text"
                            class="form-control @error('proteksi') is-invalid @enderror"
                            id="proteksi" name="proteksi" value="{{ old('proteksi') ?? $kendaraan->proteksi }}">
                            @error('proteksi')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text"
                            class="form-control @error('status') is-invalid @enderror"
                            id="status" name="status" value="{{ old('status') ?? $kendaraan->status }}">
                            @error('status')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="pemilik">Pemilik</label>
                            <input type="text"
                            class="form-control @error('pemilik') is-invalid @enderror"
                            id="pemilik" name="pemilik" value="{{ old('pemilik') ?? $kendaraan->pemilik }}">
                            @error('pemilik')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="sejarah">Sejarah</label>
                            <textarea class="form-control" id="sejarah" rows="3"
                            name="sejarah">{{ old('sejarah') ?? $kendaraan->sejarah }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="pemakaian">Pemakaian</label>
                            <textarea class="form-control" id="pemakaian" rows="3"
                            name="pemakaian">{{ old('pemakaian') ?? $kendaraan->pemakaian }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Gambar Profile</label>
                            <br><img height="150px" src="{{url('')}}/{{$kendaraan->image}}" class="rounded" alt="">
                            <input type="file" class="form-control-file" id="image" name="image">
                            @error('image')
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