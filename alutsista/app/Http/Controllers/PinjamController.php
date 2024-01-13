<?php

namespace App\Http\Controllers;

use App\Models\Pinjam;
use Illuminate\Http\Request;
use File;

class PinjamController extends Controller
{
    //
    public function create()
    {
        return view('pinjam.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'peminjam' => 'required|min:3|max:50',
            'alutsista' => 'required|min:3|max:50',
            'kondisi' => 'required',
            'catatan' => '',
            'status' => 'required|in:P,K',
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => '',
        ]);
        $pinjam = new Pinjam();
        $pinjam->peminjam = $validateData['peminjam'];
        $pinjam->alutsista = $validateData['alutsista'];
        $pinjam->kondisi = $validateData['kondisi'];
        $pinjam->catatan = $validateData['catatan'];
        $pinjam->status = $validateData['status'];
        $pinjam->tanggal_pinjam = $validateData['tanggal_pinjam'];
        $pinjam->tanggal_kembali = $validateData['tanggal_kembali'];
        $pinjam->save();
        $request->session()->flash('pesan','Penambahan data berhasil');
        return redirect()->route('pinjam.index');
    }

    public function index()
    {
        $pinjams = Pinjam::all();
        return view('pinjam.index',['pinjams' => $pinjams]);
    }

    public function show($pinjam_id)
    {
        $result = Pinjam::findOrFail($pinjam_id);
        return view('pinjam.show',['pinjam' => $result]);
    }

    public function edit($pinjam_id)
    {
        $result = Pinjam::findOrFail($pinjam_id);
        return view('pinjam.edit',['pinjam' => $result]);
    }

    public function update(Request $request, Pinjam $pinjam)
    {
        $validateData = $request->validate([
            'peminjam' => 'required|min:3|max:50',
            'alutsista' => 'required|min:3|max:50',
            'kondisi' => 'required',
            'catatan' => '',
            'status' => 'required|in:P,K',
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => '',
        ]);
        $pinjam->peminjam = $validateData['peminjam'];
        $pinjam->alutsista = $validateData['alutsista'];
        $pinjam->kondisi = $validateData['kondisi'];
        $pinjam->catatan = $validateData['catatan'];
        $pinjam->status = $validateData['status'];
        $pinjam->tanggal_pinjam = $validateData['tanggal_pinjam'];
        $pinjam->tanggal_kembali = $validateData['tanggal_kembali'];
        $pinjam->save();
        $request->session()->flash('pesan','Perubahan data berhasil');
        return redirect()->route('pinjam.show',['pinjam' => $pinjam->id]);
    }

    public function destroy(Request $request, Pinjam $pinjam)
    {
        $pinjam->delete();
        $request->session()->flash('pesan','Hapus data berhasil');
        return redirect()->route('pinjam.index');
    }
}
