
@extends('layouts.app')

@section('title')
    Buat Lelang
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header card-header-info">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="/action_page.php" class="was-validated">
                        <div class="form-group">
                            <label for="nama">Nama Ikan:</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan nama ikan" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="berat">Berat ikan:</label>
                            <input type="text" name="berat" class="form-control" id="berat" placeholder="Masukan Berat ikan" name="berat" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">Satuan:</label>
                            <div class="col-sm-10"> 
                    <select name="satuan" class="form-control" id="satuan">
                        <option value="" selected>SATUAN</option>
                        <option value="1">ONS</option>
                        <option value="2">KG</option>
                    </select>
                  </div>
                </div>
                        <div class="form-group">
                            <label for="berat">Harga ikan:</label>
                            <input type="text" name="harga" class="form-control" id="harga" placeholder="Masukan Harga lelang awal ikan" name="harga" required>
                        </div>
                        
                <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
<div class="col-md-6">
    <div class="form-group">
        <label>Masukkan Gambar</label>
        <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Browser… <input type="file" id="imgInp">
                </span>
            </span>
            <input type="text" class="form-control" readonly>
        </div>
        <img id='img-upload'/>
    </div>
</div>
</div>
                            <button type="submit" class="btn btn-primary">Buat Lelang</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
