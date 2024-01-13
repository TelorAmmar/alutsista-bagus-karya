<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Data Senjata {{$senjata->nama}}</title>
    </head>
    <body>
        <div class="container mt-3">
            <div class="row">
                <div class="col-12">
                    <div class="pt-3 d-flex justify-content-end align-items-center">
                        <h1 class="h2 mr-auto">Biodata {{$senjata->nama}}</h1>
                        <a href="{{ route('senjata.edit',['senjata' => $senjata->id]) }}"
                            class="btn btn-primary">Edit
                        </a>
                        <form action="{{ route('senjata.destroy',['senjata'=>$senjata->id]) }}"
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
                        <li>Nama: {{$senjata->nama}} </li>
                        <li>No. Seri: {{$senjata->no_seri}} </li>
                        <li>Kapasitas: {{$senjata->kapasitas}} </li>
                        <li>Ukuran: {{$senjata->ukuran}} </li>
                        <li>Berat: {{$senjata->berat}} </li>
                        <li>Daya Tembak: {{$senjata->daya_tembak}} </li>
                        <li>Kecepatan: {{$senjata->kecepatan}} </li>
                        <li>Status: {{$senjata->status}} </li>
                        <li>Pemilik: {{$senjata->pemilik}} </li>
                        <li>Sejarah: {{$senjata->sejarah}} </li>
                        <li>Pemakaian: {{$senjata->pemakaian}} </li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
