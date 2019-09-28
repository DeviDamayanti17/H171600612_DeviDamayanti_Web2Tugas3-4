<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengumumanController extends Controller
{
     public function index()
    {
        $pengumuman=Pengumuman::all();
        
        return view('pengumuman.index',compact('pengumuman'));
    }
}
