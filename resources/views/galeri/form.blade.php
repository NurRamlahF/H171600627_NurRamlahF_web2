@csrf

                        <div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                {!! Form::text('nama', null ,['class' => 'form-control']); !!}
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="keterangan" class="col-md-4 col-form-label text-md-right">{{ __('Keterangan') }}</label>

                            <div class="col-md-6">
                                {!! Form::textarea('keterangan', null ,['class' => 'form-control']); !!}

                                @error('keterangan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="path" class="col-md-4 col-form-label text-md-right">{{ __('Path') }}</label>

                            <div class="col-md-6">
                                {!! Form::text('path', null ,['class' => 'form-control']); !!}

                               
                                @error('path')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kategori_galeri_id" class="col-md-4 col-form-label text-md-right">{{ __('Kategori Galeri Id') }}</label>

                            <div class="col-md-6">
                                 {!! Form::select('kategori_galeri_id',$KategoriGaleri, null, ['class' => 'form-control']); !!}

                                @error('kategori_galeri_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="users_id" class="col-md-4 col-form-label text-md-right">{{ __('User id') }}</label>

                            <div class="col-md-6">
                                <input id="users_id" type="text" class="form-control @error('users_id') is-invalid @enderror" name="users_id" value="{{ Auth::id() }}" required autocomplete="users_id">

                                @error('users_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Simpan') }}
                                </button>
                            </div>
                        </div>