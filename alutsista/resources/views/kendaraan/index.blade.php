<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Daftar Kendaraan</title>
    </head>
    <body>
        <div class="container mt-3">
            <div class="row">
                <div class="col-12">
                    <div class="py-4 d-flex justify-content-end align-items-center">
                        <h2 class="mr-auto">Daftar Kendaraan</h2>
                        <a href="{{ route('kendaraan.create') }}" class="btn btn-primary">
                            Tambah Kendaraan
                        </a>
                    </div>
                    @if(session()->has('pesan'))
                    <div class="alert alert-success">
                        {{ session()->get('pesan') }}
                    </div>
                    @endif

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Gambar</th>
                                <th>Nama</th>
                                <th>Tipe</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($kendaraans as $kendaraan)
                            <tr>
                                <th>{{$loop->iteration}}</th>
                                <td><img height="30px" src="{{url('')}}/{{$kendaraan->image}}" class="rounded" alt=""></td>
                                <td><a href="{{ route('kendaraan.show',['kendaraan' => $kendaraan->id]) }}">{{$kendaraan->nama}}</a></td>
                                <td>{{$kendaraan->tipe}}</td>
                            </tr>
                            @empty
                            <td colspan="6" class="text-center">Tidak ada data...</td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
 </html>
