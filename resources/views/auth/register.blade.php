@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-6">
            <div class="card">
                <div class="card-body">
                  <p class="card-title h4">Register</p>
                  <hr>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label>Nama</label>
                            <input placeholder="Nama" id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>No Handphone</label>
                            <input placeholder="No Handphone" id="no_hp" type="number" class="form-control{{ $errors->has('no_hp') ? ' is-invalid' : '' }}" name="no_hp" value="{{ old('no_hp') }}" required autocomplete="no_hp" autofocus>
                            @if ($errors->has('no_hp'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('no_hp') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input placeholder="Email" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input placeholder="Password" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="new-password">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>


                        <div class="form-group">
                            <label>Konfirmasi Password</label>
                            <input placeholder="Konfirmasi Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">
                            {{ __('Register') }}
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
