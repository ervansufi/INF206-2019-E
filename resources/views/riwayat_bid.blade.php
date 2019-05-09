@extends('layouts.app')

@section('title')
    Riwayat Bid
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="bg-primary card-header card-header-info">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    ini halaman Riwayat bid
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
