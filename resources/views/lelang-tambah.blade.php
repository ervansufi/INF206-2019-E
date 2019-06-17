@extends('layouts.app')

@section('title', 'Lelang')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <p class="card-title h4">Buat Lelang</p>
                    <div id="thumbnail" class="mb-3">
                      <div class="instruction">
                        <i class="fa fa-cloud-upload" aria-hidden="true"></i>
                        <small>Klik disini untuk memilih gambar</small>
                      </div>
                      <img src="" alt="">
                    </div>
                    <form action="{{route('lelang.simpan')}}" enctype="multipart/form-data" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Jenis Tangkapan</label>
                            <input name="jenis_ikan" type="text" class="form-control {{ $errors->has('jenis_ikan') ? ' is-invalid' : '' }}" value="{{ old('jenis_ikan') }}"  autocomplete="jenis_ikan" autofocus placeholder="Masukan Jenis Ikan">
                            @if ($errors->has('jenis_ikan'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('jenis_ikan') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Massa</label>
                            <div class="input-group">
                                <div class="input-group-prepend" style="width:80%">
                                        <input name="berat_ikan" type="number" class="form-control {{ $errors->has('berat_ikan') ? ' is-invalid' : '' }}" value="{{ old('berat_ikan') }}"  autocomplete="berat_ikan" placeholder="Massa">
                                        @if ($errors->has('berat_ikan'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('berat_ikan') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <select class="custom-select {{ $errors->has('satuan') ? ' is-invalid' : '' }}" value="{{ old('satuan') }}"  autocomplete="satuan" name="satuan">
                                            <option selected>Satuan</option>
                                            <option value="Kg">Kilogram</option>
                                            <option value="Gr">Gram</option>
                                            <option value="Ons">Ons</option>
                                        </select>
                                        @if ($errors->has('satuan'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('satuan') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Minimum Lelang</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Rp</span>
                                        </div>
                                <input name="harga_bid" type="text" class="form-control {{ $errors->has('harga_bid') ? ' is-invalid' : '' }}" value="{{ old('harga_bid') }}"  autocomplete="harga_bid" placeholder="Minimum Lelang">
                                @if ($errors->has('harga_bid'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('harga_bid') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Pilih Video</label>
                            <div class="custom-file">
                                <input name="video_ikan" type="file" class="custom-file-input " id="upload-video" accept="video/*">
                                <label class="custom-file-label " for="upload-video">Pilih Video</label>
                            </div>
                            @if ($errors->has('video_ikan'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('video_ikan') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Durasi (Menit)</label>
                            <input name="durasi" type="number" class="form-control" value="{{ old('durasi') }}">
                        </div>
                        <input name="image_ikan" type="file" class="d-none" id="upload-image" accept="image/*">
                        <button type="submit" class="btn btn-primary float-right px-4">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
@endsection
