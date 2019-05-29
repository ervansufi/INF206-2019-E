@extends('layouts.app')

@section('title', 'Lelang')

@section('content')
  <div class="container mt-5">
    <div class="card lelang-tampil">
      <div class="card-body">
        <div class="row">
          <div class="col-md-7">
            <p class="card-title h4 m-0">{{$ikan->Jenis_Ikan}} {{$ikan->berat_ikan}}</p>
            <p class="card-title h4" id="waktu"></p>
            <p class="card-text">
              <small class="text-muted"><i class="fa fa-tag" aria-hidden="true"></i> Rp {{number_format($ikan->harga_bid,0,',','.')}}</small><br>
              <small class="text-muted"><i class="fa fa-users" aria-hidden="true"></i> {{$ikan->jumlahBid($ikan->id)}} akun telah membidding</small>
            </p>
            <div class="list-wrapper list-bidding">
                @foreach ($ikan->riwayatBid($ikan->id) as $ikans)
                @php
                    $user = DB::table('users')->where('id',$ikans->user_id)->first();
                @endphp
                <div class="list-item">
                  <div class="item-info">
                    <p class="list-title">{{$ikans->nama_lelang}}</p>
                    <p class="text-muted">{{$user->no_hp}}</p>
                    <p class="text-muted">Rp {{number_format($ikans->harga_lelang,0,',','.')}}</p>
                    <p>
                      <small class="text-muted"><i class="fa fa-calendar-o" aria-hidden="true"></i> {{$ikans->created_at}}</small>
                    </p>
                  </div>
                  <div class="action-btn">
                    <a href="{{ route('lelang.delete', $ikans->id) }}" class="btn btn-danger">
                      <i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                    <a href="{{ route('lelang.edit', $ikans->lelang_id) }}" class="btn btn-secondary">
                      <i class="fa fa-check" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>

                @endforeach
            </div>
          </div>
          <div class="col-md-5">
          <video class="video-lelang" src="{{asset('videolelang/'.$ikan->video_ikan)}}" width="300px" height="200px" poster="" preload controls loop allowFullScreen></video>
          </div>
        </div>
      </div>
    </div>
  </div>
   <script>
        var waktu=new Date('{{$ikan->updated_at}}').getTime();

        var timer=setInterval(function () {
            sekarang= new Date().getTime()

            sisa=waktu-sekarang
             menit = Math.floor((sisa % (1000 * 60 * 60)) / (1000 * 60));
             detik = Math.floor((sisa % (1000 * 60)) / 1000);

            document.getElementById("waktu").innerHTML =  menit + ":" + detik ;

            if (sisa < 0) {
                document.getElementById("waktu").innerHTML = "Berakhir";
            }

        },1000)
    </script>

@endsection
