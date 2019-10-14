@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center bg-success"  >Artikel</div>
                <div class="card-body bg-danger">
                <a href="{!! route('artikel.create')!!}" class="btn btn-warning">{{ __('Tambah Data')}}</a>
                <a href="{!! route('kategori_artikel.index')!!}" class="btn btn-warning">{{ __('Lihat Kategori Artikel')}}</a>
                <a href="{!! route('home')!!}" class="btn btn-warning">{{ __('Home')}}</a>
                
                <div class="col text-center ">
                <br>
                <table class="table table-bordered bg-success">
                    <thead class ="bg-info">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Judul</th>
                                <th scope="col">isi</th>
                                <th scope="col">User_id</th>
                                <th scope="col">Kategori_artikel_id</th>
                                <th scope="col">Aksi</th>
                            </tr>
                    </thead>
                    <tbody>
                        @foreach ($Artikel as $item)
                            <tr>
                               
                                <td>{!! $item->id!!}</td>
                                <td>{!! $item->judul!!}</td>
                                <td>{!! $item->isi!!}</td>
                                <td>{!! $item->users_id!!}</td>
                                <td>{!! $item->kategori_artikel_id!!}</td>

                                <td>
                                <a href="{!! route('artikel.show',[$item-> id]) !!}" button class="btn btn-sn  btn-success" >Lihat Detail</a>
                                
                                <a href="{!! route('artikel.edit',[$item-> id]) !!}" button class="btn btn-sm btn-warning" >Edit</a>
                             
                                {!! Form::open(['route' => ['artikel.destroy', $item->id],'method' => 'delete']) !!}

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