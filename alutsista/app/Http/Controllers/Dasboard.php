<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dasboard extends Controller
{
    public function index()
    {
        $data['module']['name'] = "Beranda";
        return view('kerangka.master',['data' => $data]);
        }
}
