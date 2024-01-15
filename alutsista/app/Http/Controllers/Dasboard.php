<?php

namespace App\Http\Controllers;

use App\Models\Senjata;
use App\Models\Kendaraan;
use Illuminate\Http\Request;
use File;

class Dasboard extends Controller
{
    public function index()
    {
        $data['module']['name'] = "Beranda";
        $senjatas = Senjata::all();
        $kendaraans = Kendaraan::all();
        return view('dasboard.welcome',['senjatas' => $senjatas],['kendaraans' => $kendaraans]);
        }
}
