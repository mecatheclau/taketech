@extends('layouts.app')

@section('content')
<div class="main-banner">
    <div class="row justify-content-center bg-overlay">
        <div class="col-md-8 center-card">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    <span>Before proceeding, please check your email for a verification link.</span><br><span>
                    {{ __('If you did not receive the email') }} <a href="{{ route('verification.resend') }}" class="btn-primary">{{ __('click here to request another') }}</a>.</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
