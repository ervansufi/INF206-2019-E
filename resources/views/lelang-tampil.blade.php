@extends('layouts.app')

@section('title', 'Lelang')

@section('content')
  <div class="container mt-5">
    <div class="card lelang-tampil">
      <div class="card-body">
        <div class="row">
          <div class="col-md-7">
            <p class="card-title h4 m-0">Ikan Tuna 5 Kg</p>
            <p class="card-text">
              <small class="text-muted"><i class="fa fa-tag" aria-hidden="true"></i> Rp 80000</small><br>
              <small class="text-muted"><i class="fa fa-users" aria-hidden="true"></i> 10 akun telah membidding</small>
            </p>
            <div class="list-wrapper list-bidding">
              @for ($i=0; $i < 10; $i++)
                <div class="list-item">
                  <div class="item-info">
                    <p class="list-title">Nama Lelang {{ $i }}</p>
                    <p class="text-muted">Rp 120000</p>
                    <p>
                      <small class="text-muted"><i class="fa fa-calendar-o" aria-hidden="true"></i> 15 May 2019 10:43</small>
                    </p>
                  </div>
                  <div class="action-btn">
                    <a href="" class="btn btn-danger">
                      <i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                    <a href="{{ route('bid.edit', $i) }}" class="btn btn-secondary">
                      <i class="fa fa-check" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              @endfor
            </div>
          </div>
          <div class="col-md-5">
            <video class="video-lelang" src="" poster="" preload controls loop allowFullScreen></video>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
