@extends('layouts.app')

@section('title', 'Bidding')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <p class="card-title h3">Mulai Bidding</p>
                    <table class="bidding-info mb-3">
                        @php
                            $username=DB::table('ikans')
                            ->where('ikans.id',$ikan->id)
                            ->join('users', 'ikans.user_id', '=', 'users.id')
                            ->select('users.name')
                            ->get()->first();
                        @endphp

                        <tr>
                            <th>Nama Tangkapan</th>
                            <td>: {{$ikan->Jenis_Ikan}}</td>
                        </tr>
                        <tr>
                            <th>Berat</th>
                            <td>: {{$ikan->berat_ikan}}</td>
                        </tr>
                        <tr>
                            <th>Pelelang</th>
                            <td>: {{$username->name}}</td>
                        </tr>
                        <tr>
                            <th>Minimum Bidding</th>
                            <td>: Rp {{number_format($ikan->harga_bid,0,',','.')}}</td>
                        </tr>
                    </table>
                    <form method="POST" action="{{route('bid.simpan',$ikan->id)}}">
                        @csrf
                        <div class="form-group">
                            <label>Nilai Bid</label>
                            <input type="text" class="form-control{{ $errors->has('harga_bid') ? ' is-invalid' : '' }}" placeholder="Nilai Bid" name="harga_bid" value="{{ old('harga_bid') }}"  autocomplete="harga_bid">
                            @if ($errors->has('harga_bid'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('harga_bid') }}</strong>
                                </span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary float-right px-4">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-5 order-md-first">
            <div class="card">
                <div class="card-body list-wrapper">
                    <p class="card-title h3">List Bidder</p>
                    <p class="card-title h3" id="waktu"></p>
                    @foreach ($riwayat_bid as $riwayat)
                    <div class="list-item">
                        <div class="item-info">
                            <p class="list-title">{{ $riwayat->nama_lelang }}</p>
                            <p>
                                <small class="text-muted"><i class="fa fa-tag" aria-hidden="true"></i> Rp
                                    {{ number_format($riwayat->harga_lelang,0,',','.') }}</small>&nbsp;
                                <small class="text-muted"><i class="fa fa-calendar-o" aria-hidden="true"></i> {{ $riwayat->created_at }}</small>
                            </p>
                        </div>
                    </div>
                    @endforeach
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
