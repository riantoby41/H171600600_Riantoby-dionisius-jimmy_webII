@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center bg-info"  >Kategori Artikel</div>
                <div class="card-body">
                <a href="{!! route('kategori_artikel.create')!!}" class="btn btn-primary btn-outline-danger">{{ __('Tambah Data')}}</a>
            
                <div class="col text-center">
                <table class="table table-bordered">
                    <thead class ="bg-success">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nama</th>
                                <th scope="col">User_id</th>
                                <th scope="col">Created</th>
                                <th scope="col">Aksi</th>
                            </tr>
                    </thead>
                    <tbody>
                        @foreach ($KategoriArtikel as $item)
                            <tr>
                               
                                <td>{!! $item->id!!}</td>
                                <td>{!! $item->nama!!}</td>
                                <td>{!! $item->users_id !!}</td>
                                <td>{!! $item->created_at->format('d/m/Y H:i:s') !!}</td>
                                <td>
                                <button class="btn btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</button>
                                <a href="{!! route('kategori_artikel.show',[$item-> id]) !!}" button class="btn btn-success " >Lihat Detail</a>
                                
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                    </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection