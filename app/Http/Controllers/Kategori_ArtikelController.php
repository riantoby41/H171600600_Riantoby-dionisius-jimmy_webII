<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori_Artikel;

class Kategori_ArtikelController extends Controller
{
   
    public function index()
    {
        $kategori_artikel=kategori_artikel::all();
        
        return view('kategori_artikel.index',compact('kategori_artikel'));
    }
}