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
        return view('dasboard.welcome',['data' => $data]);
        $senjatas = Senjata::all();
        return view('dasboard.welcome',['senjatas' => $senjatas]);
        $kendaraans = Kendaraan::all();
        return view('dasboard.welcome',['kendaraans' => $kendaraans]); 
        }
}
