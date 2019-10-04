<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\KategoriArtikel;

class ArtikelController extends Controller
{
    function index(){
        $Artikel=Artikel::all();

        return view ('artikel.index',compact('Artikel'));
    }
    public function show($id)
    {
    
    	$artikel=artikel::find($id);

    	return view(  'artikel.show',compact( 'artikel'));
    }

    public function create()
    {
    	$KategoriArtikel=KategoriArtikel::pluck('nama','id');
    	

    	return view( 'artikel.create',compact('KategoriArtikel'));
    }
    public function store(Request $request)
    {
    	$input= $request->all();
    	
    	Artikel::create($input);

    	return redirect(route('artikel.index'));
    }

}
