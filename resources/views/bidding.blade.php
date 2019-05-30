@extends('layouts.app')

@section('title', 'Bidding')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-body list-wrapper list-bidding">
            <p class="card-title h3">Riwayat Bidding</p>
            <div class="row">

            @foreach ($riwayat_bid as $riwayat)

            <div class="col-md-6">
                <div class="list-item">
                    <div class="item-info">
                        <p class="list-title">{{$riwayat->nama_lelang}}</p>
                        <p class="text-muted">Rp {{number_format($riwayat->harga_lelang,0,',','.')}}</p>
                        <p>
                            <small class="text-muted"><i class="fa fa-calendar-o" aria-hidden="true"></i> {{$riwayat->created_at}}</small>
                        </p>
                    </div>
                    <div class="action-btn">
                        <a href="{{ route('bid.delete', $riwayat->id) }}" class="btn btn-danger">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </a>
                        <a href="{{ route('bid.edit', $riwayat->id) }}" class="btn btn-secondary">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</div>
@endsection
