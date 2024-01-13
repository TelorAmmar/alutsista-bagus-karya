<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Daftar Senjata</title>
    </head>
    <body>
        <div class="container mt-3">
            <div class="row">
                <div class="col-12">
                    <div class="py-4 d-flex justify-content-end align-items-center">
                        <h2 class="mr-auto">Daftar Senjata</h2>
                        <a href="{{ route('senjata.create') }}" class="btn btn-primary">
                            Tambah Senjata
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
                                <th>No. Seri</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($senjatas as $senjata)
                            <tr>
                                <th>{{$loop->iteration}}</th>
                                <td><img height="30px" src="{{url('')}}/{{$senjata->image}}" class="rounded" alt=""></td>
                                <td><a href="{{ route('senjata.show',['senjata' => $senjata->id]) }}">{{$senjata->nama}}</a></td>
                                <td>{{$senjata->no_seri}}</td>
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
