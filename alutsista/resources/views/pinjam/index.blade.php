<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Daftar Riwayat Peminjaman</title>
    </head>
    <body>
        <div class="container mt-3">
            <div class="row">
                <div class="col-12">
                    <div class="py-4 d-flex justify-content-end align-items-center">
                        <h2 class="mr-auto">Daftar Riwayat Peminjaman</h2>
                        <a href="{{ route('pinjam.create') }}" class="btn btn-primary">
                            Tambah Riwayat Peminjaman
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
                                <th>Peminjam</th>
                                <th>Alutsista</th>
                                <th>Status</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pinjams as $pinjam)
                            <tr>
                                <th>{{$loop->iteration}}</th>
                                <td><a href="{{ route('pinjam.show',['pinjam' => $pinjam->id]) }}">{{$pinjam->peminjam}}</a></td>
                                <td>{{$pinjam->alutsista}}</td>
                                <td>{{$pinjam->status == 'P'?'Belum Dikembalikan':'Laki-laki'}}</td>
                                <td>{{$pinjam->tanggal_pinjam}}</td>
                                <td>{{$pinjam->tanggal_kembali}}</td>
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
