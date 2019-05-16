@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="home-page-header">
    <div class="header-background">
        <img src="{{ asset('image/fisherman.jpg') }}" alt="">
    </div>
    <div class="header-welcome-text">
        <h1 class="display-2">Benefish</h1>
        <p class="h4">Lelang Ikan Sekarang Lebih Mudah</p>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        @foreach ($post as $posts)
        @php
        $username=DB::table('users')
        ->where('ikans.user_id',$posts->user_id)
        ->join('ikans', 'users.id', '=', 'ikans.user_id')
        ->select('users.name')
        ->get()->first();
        @endphp

        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card card-lelang mb-3">
                <img class="card-img-top" src="{{ asset('image/16_9_ratio.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title m-0">{{$posts->Jenis_Ikan}} {{$posts->berat_ikan}}</h5>
                    <p class="card-text m-0">
                        <small class="text-muted"><i class="fa fa-user" aria-hidden="true"></i>
                            {{$username->name}}</small><br>
                        <small class="text-muted"><i class="fa fa-tag" aria-hidden="true"></i> Rp
                            {{$posts->harga_bid}}</small>
                    </p>
                    <a href="{{ route('bid.tambah', $posts->id) }}"
                        class="btn btn-secondary btn-block mt-1 text-white">Mulai
                        Bidding</a>
                </div>
            </div>
        </div>
        @endforeach
</div>
</div>
@endsection
