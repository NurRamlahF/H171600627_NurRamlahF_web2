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
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Judul') }}</label>
                <label for="name" class="col-md-4 col-form-label text-md-right">{!!$berita->judul!!}</label>
                </div>
                <div>
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Isi') }}</label>
                <label for="name" class="col-md-4 col-form-label text-md-right">{!!$berita->isi!!}</label>
                </div>
                <div>
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Kategori Berita id') }}</label>
                <label for="name" class="col-md-4 col-form-label text-md-right">{!!$berita->kategori_berita_id!!}</label>
                </div>
                <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('users_id') }}</label>
                <label for="name" class="col-md-4 col-form-label text-md-right">{!!$berita->users_id!!}</label>
                </div>
                
				</div>
			</div>
		</div>
	</div>
</div>