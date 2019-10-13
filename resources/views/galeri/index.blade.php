@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">galeri</div>
                <div class="card-body">
                    <a href="{!! route('galeri.create') !!}">Tambah Data Galeri</a>
                <table class="table table-bordered">
                    <thead class="bg-danger">
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Path</th>
                        <th scope="col">Kategori Galeri id</th>
                        <th scope="col">User_id</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $galeri as $item)
                        <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->nama !!}</td>
                        <td>{!! $item->keterangan !!}</td>
                        <td>{!! $item->path !!}</td>
                        <td>{!! $item->kategori_galeri_id !!}</td>
                        <td>{!! $item->users_id !!}</td>
                        <td><a href="{!! route('galeri.show',[$item->id]) !!}">Lihat</a></td>
                        <td><a href="{!! route('galeri.edit',[$item->id]) !!}" class="btn btn-primary">edit</a>
                        </td>
                        <td>
                                {!! Form::open(['route' => ['galeri.destroy',$item->id], 'method' => 'delete']); !!}
                                {!! Form::submit('Hapus',['class'=>'btn btn-danger']); !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
		@endsection