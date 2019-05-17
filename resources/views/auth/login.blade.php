@extends('layouts.app')

@section('title')
    Login
@endsection

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-6 ml-auto mr-auto">
            <div class="card">
                <div class="card-body">
                  <p class="card-title h4">Login</p>
                  <hr>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label>Email</label>
                            <input placeholder="Masukkan Email" id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"   autocomplete="email" autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input placeholder="Masukkan Password" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"   autocomplete="current-password">

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">
                          {{ __('Masuk') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
