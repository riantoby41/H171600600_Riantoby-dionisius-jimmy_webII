<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriPengumuman;

class KategoriPengumumanController extends Controller
{
    function index(){
        $KategoriPengumuman=KategoriPengumuman::all();

        return view ('kategori_pengumuman.index',compact('KategoriPengumuman'));
    }

    public function show($id)
    {
    
    	$kategori_pengumuman=KategoriPengumuman::find($id);

    	return view(  'kategori_pengumuman.show',compact( 'kategori_pengumuman'));
    }

    public function create()
    {

    	return view( 'kategori_pengumuman.create');
    }
    public function store(Request $request)
    {
    	$input= $request->all();
    	KategoriPengumuman::create($input);

    	return redirect(route('kategori_pengumuman.index'));
    }    
}
