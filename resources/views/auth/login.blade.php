@extends('layouts.app')

@section('title', 'Logging in')

@section('content')

    <!-- inner banner -->

    <div class="inner-banner-w3ls py-5" id="home">
        <div class="container py-xl-5 py-lg-3">
            <!-- login  -->
            <div class="modal-body my-5 pt-4">
                <h3 class="title-w3 mb-5 text-center text-wh font-weight-bold">Login Now</h3>
                <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-form-label text-md-right"><h3><i class="fa fa-user"></i>{{ __('Email address') }}</h3></label>
                        </div>
                        <div class="form-group row">
                            <div class="w-100">
                                <input id="email" type="email" class="btn-radius form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-form-label text-md-right"><h3><i class="fa fa-lock"></i>{{ __('Password') }}</h3></label>
                        </div>
                        <div class="row">
                            <div class="w-100">
                                <input id="password" type="password" class="btn-radius form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 float-left">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" value="{{ old('remember') ? 'checked' : '' }}">

                                    <label class="form-check-label col-form-label text-md-right " for="remember">
                                        <h4>{{ __('Remember Me') }}</h4>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 float-right">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="">
                            <div class="">
                                <button type="submit" class="btn button-style-w3">Register</button>
                            </div>
                        </div>
                </form>
            </div>
            <!-- //login -->
        </div>
    </div>
    
    <!-- //inner banner -->
    
@endsection
