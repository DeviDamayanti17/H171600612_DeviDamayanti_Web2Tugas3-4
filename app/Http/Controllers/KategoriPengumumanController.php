<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategoripengumuman;

class KategoriPengumumanController extends Controller
{
    public function index(){
    	
    	$listKategoripengumuman=listKategoripengumuman::all(); 

    	return view ('kategori_pengumuman.index',compact('listKategoriPengumuman'));
    	//return view ('kategori_.pengumumanindex'->with('data',$listKategoripengumuman);
    }

    public function show($id) {

    	//$KategoriArtikel=KategoriArtikel::where('id',$id)->first();
    	$Kategoripengumuman=KategoriPengumuman::find($id);
    	
    }
}
