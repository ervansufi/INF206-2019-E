@extends('layouts.app')

@section('title')
    Register
@endsection

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-6 ml-auto mr-auto">
            <div class="card">
                <div class="card-body">
                    <p class="card-title h4">Register</p>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label>Nama</label>
                            <input placeholder="Masukkan Nama" id="name" type="text" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" value="{{ old('nama') }}"  autocomplete="nama" autofocus>
                            @if ($errors->has('nama'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('nama') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>No Handphone</label>
                            <input placeholder="Masukkan No Handphone" id="no_hp" type="number" class="form-control{{ $errors->has('no_hp') ? ' is-invalid' : '' }}" name="no_hp" value="{{ old('no_hp') }}"  autocomplete="no_hp" autofocus>
                            @if ($errors->has('no_hp'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('no_hp') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input placeholder="Masukkan Email" id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"  autocomplete="email">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input placeholder="Masukkan Password" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"  autocomplete="new-password">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Konfirmasi Password</label>
                            <input placeholder="Masukkan Konfirmasi Password" id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">
                          {{ __('Daftar') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
