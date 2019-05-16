@extends('layouts.app')

@section('title', 'Lelang')

@section('content')
  <div class="container mt-5">
    <div class="card">
      <div class="card-body">
        <p class="card-title h4">Buat Lelang</p>
        <form enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-8">
              <div class="form-group">
                <label>Jenis Tangkapan</label>
                <input type="text" class="form-control" placeholder="Nilai Bid">
              </div>
              <div class="form-group">
                <label>Massa</label>
                <div class="input-group">
                  <div class="input-group-prepend" style="width:80%">
                    <input type="number" class="form-control" placeholder="Massa">
                  </div>
                  <select class="custom-select">
                    <option selected>Satuan</option>
                    <option value="1">Kilogram</option>
                    <option value="2">Gram</option>
                    <option value="3">Ons</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label>Minimum Lelang</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Rp</span>
                  </div>
                  <input type="text" class="form-control" placeholder="Minimum Lelang">
                </div>
              </div>
              <div class="form-group">
                <label>Pilih Video</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="upload-video">
                  <label class="custom-file-label" for="upload-video">Pilih Video</label>
                </div>
              </div>
              <button type="submit" class="btn btn-primary float-right px-4">Submit</button>
            </div>
            <div class="col-md-4 mt-4 mt-md-0">
              <video id="preview-video" src="" poster="" preload controls loop allowFullScreen></video>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
