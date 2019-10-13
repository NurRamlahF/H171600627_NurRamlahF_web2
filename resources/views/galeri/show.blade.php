@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data</div>
                <div class="card-body">
                <div class="form-group row">
                <div>
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>
                <label for="name" class="col-md-4 col-form-label text-md-right">{!!$galeri->nama!!}</label>
                </div>
                <div>
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Keterangan') }}</label>
                <label for="name" class="col-md-4 col-form-label text-md-right">{!!$galeri->keterangan!!}</label>
                </div>
                <div>
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Path') }}</label>
                <label for="name" class="col-md-4 col-form-label text-md-right">{!!$galeri->path!!}</label>
                </div>
                <div>
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Kategori Galeri Id') }}</label>
                <label for="name" class="col-md-4 col-form-label text-md-right">{!!$galeri->kategori_galeri_id!!}</label>
                </div>
                <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('users_id') }}</label>
                <label for="name" class="col-md-4 col-form-label text-md-right">{!!$galeri->users_id!!}</label>
                </div>
                
				</div>
			</div>
		</div>
	</div>
</div>