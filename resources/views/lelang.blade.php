@extends('layouts.app')

@section('title', 'Lelang')

@section('content')
  <div class="container mt-5">
    <div class="row">
      @for ($i=0; $i < 12; $i++)
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card card-lelang mb-3">
            <img class="card-img-top" src="{{ asset('image/16_9_ratio.jpg') }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title m-0">Ikan Tuna 5 Kg</h5>
              <p class="card-text m-0">
                <small class="text-muted"><i class="fa fa-tag" aria-hidden="true"></i> Rp 80000</small><br>
                <small class="text-muted"><i class="fa fa-users" aria-hidden="true"></i> 10 akun telah membidding</small>
              </p>
              <div class="d-flex">
                <a href="{{ route('lelang.delete', $i) }}" class="btn btn-danger btn-block mt-1 mr-1 text-white">Hapus</a>
                <a href="{{ route('lelang.tampil', $i) }}" class="btn btn-secondary btn-block mt-1 ml-1 text-white">Detail</a>
              </div>

            </div>
          </div>
        </div>
      @endfor
    </div>
  </div>
@endsection
