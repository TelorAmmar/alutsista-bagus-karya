<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Data Peminjaman {{$pinjam->nama}}</title>
    </head>
    <body>
        <div class="container mt-3">
            <div class="row">
                <div class="col-12">
                    <div class="pt-3 d-flex justify-content-end align-items-center">
                        <h1 class="h2 mr-auto">Biodata {{$pinjam->nama}}</h1>
                        <a href="../pinjam"
                            class="btn btn-primary">Back
                        </a>
                        <a href="{{ route('pinjam.edit',['pinjam' => $pinjam->id]) }}"
                            class="btn btn-primary">Edit
                        </a>
                        <form action="{{ route('pinjam.destroy',['pinjam'=>$pinjam->id]) }}"
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
                        <li>Peminjam: {{$pinjam->peminjam}} </li>
                        <li>Alutsista: {{$pinjam->alutsista}} </li>
                        <li>kondisi: {{$pinjam->kondisi}} </li>
                        <li>catatan: {{$pinjam->catatan}} </li>
                        <li>Status:
                        {{$pinjam->status == 'P' ? 'Belum Dikembalikan' : 'Sudah Dikembalikan'}}
                        </li>
                        <li>Tanggal Pinjam: {{$pinjam->tanggal_pinjam}} </li>
                        <li>Tanggal Kembali: {{$pinjam->tanggal_kembali}} </li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
