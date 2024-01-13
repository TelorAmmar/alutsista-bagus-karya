<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Data Kendaraan {{$kendaraan->nama}}</title>
    </head>
    <body>
        <div class="container mt-3">
            <div class="row">
                <div class="col-12">
                    <div class="pt-3 d-flex justify-content-end align-items-center">
                        <h1 class="h2 mr-auto">Biodata {{$kendaraan->nama}}</h1>
                        <a href="{{ route('kendaraan.edit',['kendaraan' => $kendaraan->id]) }}"
                            class="btn btn-primary">Edit
                        </a>
                        <form action="{{ route('kendaraan.destroy',['kendaraan'=>$kendaraan->id]) }}"
                            method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger ml-3">Hapus</button>
                        </form>
                    </div>
                    <hr>
                    @if(session()->has('pesan'))
                    <div class="alert alert-success">
                        {{ session()->get('pesan') }}
                    </div>
                    @endif
                    <ul>
                        <li>Nama: {{$kendaraan->nama}} </li>
                        <li>No. Seri: {{$kendaraan->no_seri}} </li>
                        <li>Kapasitas: {{$kendaraan->tipe}} </li>
                        <li>Kapasitas: {{$kendaraan->kapasitas}} </li>
                        <li>Ukuran: {{$kendaraan->ukuran}} </li>
                        <li>Berat: {{$kendaraan->berat}} </li>
                        <li>Kecepatan: {{$kendaraan->kecepatan}} </li>
                        <li>Kapasitas: {{$kendaraan->proteksi}} </li>
                        <li>Status: {{$kendaraan->status}} </li>
                        <li>Pemilik: {{$kendaraan->pemilik}} </li>
                        <li>Sejarah: {{$kendaraan->sejarah}} </li>
                        <li>Pemakaian: {{$kendaraan->pemakaian}} </li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
