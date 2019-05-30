@extends('layouts.app')

@section('title', 'Lelang')

@section('content')
<div class="container mt-5">
    <div class="row">
        @foreach ($ikan as $ikans)
        @php
            if($ikans->waktu<time()){
                $status = DB::table('ikans')
            ->where('id', $ikans->id)
            ->update(['status' => 'selesai']);

            }
        @endphp
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card card-lelang mb-3">
                <img class="card-img-top" src="{{  asset('videolelang/image/'.$ikans->image_ikan) }}" widht="300px" height="300px" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title m-0">{{$ikans->Jenis_Ikan}} {{$ikans->berat_ikan}}</h5>
                    <p class="card-text m-0">
                        <small class="text-muted"><i class="fa fa-tag" aria-hidden="true"></i> Rp
                            {{number_format($ikans->harga_bid,0,',','.')}}</small><br>
                        <small class="text-muted"><i class="fa fa-users" aria-hidden="true"></i>
                            {{$ikans->jumlahBid($ikans->id)}} akun telah
                            membidding</small>
                    </p>
                    <div class="d-flex">
                        <a href="{{ route('lelang.destroy', $ikans->id) }}"
                            class="btn btn-danger btn-block mt-1 mr-1 text-white">Hapus</a>
                        @if ($ikans->status=="berlangsung")
                        <a href="{{ route('lelang.tampil', $ikans->id) }}"
                            class="btn btn-secondary btn-block mt-1 ml-1 text-white">Detail</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
