@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center bg-info"  >Berita</div>
                <div class="card-body">
                <a href="{!! route('berita.create')!!}" class="btn btn-primary btn-outline-danger">{{ __('Tambah Data')}}</a>
                <div class="col text-center">
                <table class="table table-bordered">
                    <thead class ="bg-success">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Judul</th>
                                <th scope="col">isi</th>
                                <th scope="col">User_id</th>
                                <th scope="col">Kategori_berita_id</th>
                                <th scope="col">Aksi</th>
                            </tr>
                    </thead>
                    <tbody>
                        @foreach ($Berita as $item)
                            <tr>
                               
                                <td>{!! $item->id!!}</td>
                                <td>{!! $item->judul!!}</td>
                                <td>{!! $item->isi!!}</td>
                                <td>{!! $item->users_id!!}</td>
                                <td>{!! $item->kategori_berita_id!!}</td>
                                <td>
                                <button class="btn btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</button>
                                <a href="{!! route('berita.show',[$item-> id]) !!}" button class="btn btn-success " >Lihat Detail</a>
                                
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