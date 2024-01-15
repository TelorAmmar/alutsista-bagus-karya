<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;
use File;

class KendaraanController extends Controller
{
    //

    public function create()
    {
        return view('kendaraan.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|min:3|max:50',
            'no_seri' => 'required',
            'tipe' => 'required',
            'kapasitas' => 'required',
            'ukuran' => 'required',
            'berat' => 'required',
            'kecepatan' => 'required',
            'proteksi' => 'required',
            'status' => 'required',
            'pemilik' => 'required',
            'sejarah' => 'required',
            'pemakaian' => 'required',
            'image' => 'required|file|image|max:1000',
        ]);
        $kendaraan = new Kendaraan();
        $kendaraan->nama = $validateData['nama'];
        $kendaraan->no_seri = $validateData['no_seri'];
        $kendaraan->tipe = $validateData['tipe'];
        $kendaraan->kapasitas = $validateData['kapasitas'];
        $kendaraan->ukuran = $validateData['ukuran'];
        $kendaraan->berat = $validateData['berat'];
        $kendaraan->kecepatan = $validateData['kecepatan'];
        $kendaraan->proteksi = $validateData['proteksi'];
        $kendaraan->status = $validateData['status'];
        $kendaraan->pemilik = $validateData['pemilik'];
        $kendaraan->sejarah = $validateData['sejarah'];
        $kendaraan->pemakaian = $validateData['pemakaian'];
        if($request->hasFile('image'))
        {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-'.time().".".$extFile;
            $path = $request->image->move('assets/image/kendaraan',$namaFile);
            $kendaraan->image = $path;
        }
        $kendaraan->save();
        $request->session()->flash('pesan','Penambahan data berhasil');
        return redirect()->route('kendaraan.index');
    }

    public function index()
    {
        $kendaraans = Kendaraan::all();
        return view('kendaraan.index',['kendaraans' => $kendaraans]);
    }

    public function show($kendaraan_id)
    {
        $result = Kendaraan::findOrFail($kendaraan_id);
        return view('kendaraan.show',['kendaraan' => $result]);
    }

    public function edit($kendaraan_id)
    {
        $result = Kendaraan::findOrFail($kendaraan_id);
        return view('kendaraan.edit',['kendaraan' => $result]);
    }

    public function update(Request $request, Kendaraan $kendaraan)
    {
        $validateData = $request->validate([
            'nama' => 'required|min:3|max:50',
            'no_seri' => 'required',
            'tipe' => 'required',
            'kapasitas' => 'required',
            'ukuran' => 'required',
            'berat' => 'required',
            'kecepatan' => 'required',
            'proteksi' => 'required',
            'status' => 'required',
            'pemilik' => 'required',
            'sejarah' => 'required',
            'pemakaian' => 'required',
            'image' => 'file|image|max:1000',
        ]);
        $kendaraan->nama = $validateData['nama'];
        $kendaraan->no_seri = $validateData['no_seri'];
        $kendaraan->tipe = $validateData['tipe'];
        $kendaraan->kapasitas = $validateData['kapasitas'];
        $kendaraan->ukuran = $validateData['ukuran'];
        $kendaraan->berat = $validateData['berat'];
        $kendaraan->kecepatan = $validateData['kecepatan'];
        $kendaraan->proteksi = $validateData['proteksi'];
        $kendaraan->status = $validateData['status'];
        $kendaraan->pemilik = $validateData['pemilik'];
        $kendaraan->sejarah = $validateData['sejarah'];
        $kendaraan->pemakaian = $validateData['pemakaian'];
        if($request->hasFile('image'))
        {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-'.time().".".$extFile;
            File::delete($kendaraan->image);
            $path = $request->image->move('assets/images',$namaFile);
            $kendaraan->image = $path;
        }
        $kendaraan->save();
        $request->session()->flash('pesan','Perubahan data berhasil');
        return redirect()->route('kendaraan.show',['kendaraan' => $kendaraan->id]);
    }

    public function destroy(Request $request, Kendaraan $kendaraan)
    {
        $kendaraan->delete();
        $request->session()->flash('pesan','Hapus data berhasil');
        return redirect()->route('kendaraan.index');
    }
}
