<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Edit Senjata</title>
    </head>
    <body>
        <div class="container pt-4 bg-white">
            <div class="row">
                <div class="col-md-8 col-xl-6">
                    <h1>Edit Senjata</h1>
                    <hr>
                    <form action="{{ route('senjata.update',['senjata' => $senjata->id]) }}" method="POST" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Senjata</label>
                            <input type="text"
                            class="form-control @error('nama') is-invalid @enderror"
                            id="nama" name="nama" value="{{ old('name') ?? $senjata->nama }}">
                            @error('nama')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="no_seri">Nomor Seri</label>
                            <input type="text"
                            class="form-control @error('no_seri') is-invalid @enderror"
                            id="no_seri" name="no_seri" value="{{ old('no_seri') ?? $senjata->no_seri }}">
                            @error('no_seri')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="kapasitas">Kapasitas</label>
                            <input type="text"
                            class="form-control @error('kapasitas') is-invalid @enderror"
                            id="kapasitas" name="kapasitas" value="{{ old('kapasitas') ?? $senjata->kapasitas }}">
                            @error('kapasitas')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="ukuran">Ukuran</label>
                            <input type="text"
                            class="form-control @error('ukuran') is-invalid @enderror"
                            id="ukuran" name="ukuran" value="{{ old('ukuran') ?? $senjata->ukuran }}">
                            @error('ukuran')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="berat">Berat</label>
                            <input type="text"
                            class="form-control @error('berat') is-invalid @enderror"
                            id="berat" name="berat" value="{{ old('berat') ?? $senjata->berat }}">
                            @error('berat')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="daya_tembak">Daya Tembak</label>
                            <input type="text"
                            class="form-control @error('daya_tembak') is-invalid @enderror"
                            id="daya_tembak" name="daya_tembak" value="{{ old('daya_tembak') ?? $senjata->daya_tembak }}">
                            @error('daya_tembak')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="kecepatan">Kecepatan</label>
                            <input type="text"
                            class="form-control @error('kecepatan') is-invalid @enderror"
                            id="kecepatan" name="kecepatan" value="{{ old('kecepatan') ?? $senjata->kecepatan }}">
                            @error('kecepatan')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text"
                            class="form-control @error('status') is-invalid @enderror"
                            id="status" name="status" value="{{ old('status') ?? $senjata->status }}">
                            @error('status')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="pemilik">Pemilik</label>
                            <input type="text"
                            class="form-control @error('pemilik') is-invalid @enderror"
                            id="pemilik" name="pemilik" value="{{ old('pemilik') ?? $senjata->pemilik }}">
                            @error('pemilik')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="sejarah">Sejarah</label>
                            <textarea class="form-control" id="sejarah" rows="3"
                            name="sejarah">{{ old('sejarah') ?? $senjata->sejarah }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="pemakaian">Pemakaian</label>
                            <textarea class="form-control" id="pemakaian" rows="3"
                            name="pemakaian">{{ old('pemakaian') ?? $senjata->pemakaian }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Gambar Profile</label>
                            <br><img height="150px" src="{{url('')}}/{{$senjata->image}}" class="rounded" alt="">
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