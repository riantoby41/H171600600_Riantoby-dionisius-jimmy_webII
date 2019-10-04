<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;
use App\KategoriPengumuman;

class PengumumanController extends Controller
{
    function index(){
        $Pengumuman=Pengumuman::all();

        return view ('pengumuman.index',compact('Pengumuman'));
    }
    public function show($id)
    {
    
    	$pengumuman=pengumuman::find($id);

    	return view(  'pengumuman.show',compact( 'pengumuman'));
    }

    public function create()
    {
    	$KategoriPengumuman=KategoriPengumuman::pluck('nama','id');
    	

    	return view( 'pengumuman.create',compact('KategoriPengumuman'));
    }
    public function store(Request $request)
    {
    	$input= $request->all();
    	
    	pengumuman::create($input);

    	return redirect(route('pengumuman.index'));
    }

}
