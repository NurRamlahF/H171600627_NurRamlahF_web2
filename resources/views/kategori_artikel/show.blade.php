@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data</div>
                <div class="card-body">
                <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>
                <label for="name" class="col-md-4 col-form-label text-md-right">{!!$kategori_artikel->nama!!}</label>
                </div>
                <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('users_id') }}</label>
                <label for="name" class="col-md-4 col-form-label text-md-right">{!!$kategori_artikel->users_id!!}</label>
                </div>
                
				</div>
			</div>
		</div>
	</div>
</div>