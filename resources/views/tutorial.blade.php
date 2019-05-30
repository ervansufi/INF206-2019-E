@extends('layouts.app')

@section('title', 'Tutorial Lelang')

@section('content')
<div class="container mt-5">

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Tutorial</h5>
            <h6 class="card-subtitle mb-2 text-muted">Bidding</h6>
            <ol class="card-text">
                <li>
                    Klik tombol "mulai bidding" pada ikan yang ingin di bid
                </li>
                <li>
                    Setelah muncul halaman baru, masukkan jumlah harga yang ingin ditawarkan
                </li>
                <li>
                    Lalu, klik tombol "tambah"
                </li>
                <li>
                    Lihat pada menu riwayat bidding untuk memastikan bahwa ikan yang anda bid telah berhasil di bid
                </li>
            </ol>
            <h6 class="card-subtitle mb-2 text-muted">Buat Lelang</h6>
            <ol class="card-text">
                <li>
                    Klik tombol "lelang" pada menu

                </li>
                <li>
                    Kemudian pilih “buat lelang”
                </li>
                <li>
                    Setelah itu, masukkan video ikan beserta informasi yang diminta
                </li>
                <li>
                    Barulah klik tombol “submit”
                </li>
                <li>
                    Lihat pada menu riwayat lelang untuk memastikan bahwa ikan yang anda lelang telah berhasil
                    dilelang

                </li>
            </ol>
        </div>
    </div>
</div>
@endsection
