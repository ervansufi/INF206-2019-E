@extends('layouts.app')

@section('title', 'Bidding')

@section('content')
  <div class="container mt-5">
    <div class="card">
      <div class="card-body list-wrapper list-bidding">
        <p class="card-title h3">Riwayat Bidding</p>
        <div class="row">
          @for ($i=0; $i < 10; $i++)
            <div class="col-md-6">
              <div class="list-item">
                <div class="item-info">
                  <p class="list-title">Nama Lelang {{ $i }}</p>
                  <p class="text-muted">Rp 120000</p>
                  <p>
                    <small class="text-muted"><i class="fa fa-user" aria-hidden="true"></i> Nama Pembuat Lelang</small>&nbsp;
                    <small class="text-muted"><i class="fa fa-calendar-o" aria-hidden="true"></i> 15 May 2019 10:43</small>
                  </p>
                </div>
                <div class="action-btn">
                  <a href="" class="btn btn-danger">
                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                  </a>
                  <a href="{{ route('bid.edit', $i) }}" class="btn btn-secondary">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
          @endfor
        </div>
      </div>
    </div>
  </div>
@endsection
