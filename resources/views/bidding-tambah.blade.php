@extends('layouts.app')

@section('title', 'Home')

@section('content')
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-7">
        <div class="card">
          <div class="card-body">
            <p class="card-title h3">Mulai Bidding</p>
            <table class="bidding-info mb-3">
              <tr>
                <th>Nama Tangkapan</th>
                <td>: Ikan Tuna</td>
              </tr>
              <tr>
                <th>Berat</th>
                <td>: 2 Kilogram</td>
              </tr>
              <tr>
                <th>Pelelang</th>
                <td>: Muhammad Mulqan</td>
              </tr>
              <tr>
                <th>Minimum Bidding</th>
                <td>: Rp 80000</td>
              </tr>
              <tr>
                <th>Keterangan</th>
                <td>:</td>
              </tr>
            </table>
            <form>
              <div class="form-group">
                <label>Nilai Bid</label>
                <input type="text" class="form-control" placeholder="Nilai Bid">
              </div>
              <button type="submit" class="btn btn-primary float-right px-4">Submit</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-5 order-md-first">
        <div class="card">
          <div class="card-body list-wrapper">
            <p class="card-title h3">List Bidder</p>
            @for ($i=0; $i < 10; $i++)
              <div class="list-item">
                <div class="item-info">
                  <p class="list-title">Nama Bidder {{ $i }}</p>
                  <p>
                    <small class="text-muted"><i class="fa fa-tag" aria-hidden="true"></i> Rp 80000</small>&nbsp;
                    <small class="text-muted"><i class="fa fa-calendar-o" aria-hidden="true"></i> 15 May 2019 10:43</small>
                  </p>
                </div>
              </div>
            @endfor
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
