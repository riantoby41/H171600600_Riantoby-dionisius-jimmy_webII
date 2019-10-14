@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center bg-warning "  >Berita</div>
                <div class="card-body bg-danger">
                <a href="{!! route('berita.create')!!}" class="btn btn-info  ">{{ __('Tambah Data')}}</a>
                <a href="{!! route('kategori_berita.index')!!}" class="btn btn-info" >{{ __('Lihat Kategori Berita')}}</a>
                <a href="{!! route('home')!!}" class="btn btn-info ">{{ __('Home')}}</a>
                
                <div class="col text-center">
                <br>
                <table class="table table-bordered bg-warning">
                    <thead class ="bg-success">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Judul</th>
                                <th scope="col">isi</th>
                                <th scope="col">User_id</th>
                                <th scope="col">Kategori_berita_id</th>
                                <th scope="col ">Aksi</th>
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
                                <a href="{!! route('berita.show',[$item-> id]) !!}" button class="btn btn-sm btn-success" >Lihat Detail</a>
                                <br>
                                <a href="{!! route('berita.edit',[$item-> id]) !!}" button class="btn btn-sm btn-warning " >Edit</a>
                             
                                {!! Form::open(['route' => ['berita.destroy', $item->id],'method' => 'delete']) !!}

                                {!! Form::submit('Hapus', ['class'=>'btn  btn-sm btn-danger','onclick'=>"return confirm('Apakah Anda yakin menghapus data ini ?')"]); !!}
                                {!! Form::close() !!}
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