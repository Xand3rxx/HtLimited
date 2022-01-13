@extends('layouts.app')
@section('title', 'Login')
@section('content')

<div class="container">
    <div class="login-screen row align-items-center">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                <div class="login-container">
                    <div class="row no-gutters">
                        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                            <div class="login-box">
                                <a href="#" class="login-logo">
                                    <img src="{{ asset('img/logo.png') }}" alt="HT Limited logo" />
                                </a>
                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="input-group">
                                    <span class="input-group-addon" id="email"><i class="icon-account_circle"></i></span>
                                    <input id="email" placeholder="Email Address" type="email" class="form-control @error('password') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus autocomplete="email" aria-label="email" aria-describedby="email">
                                </div>
                                @error('email')
                                    <x-alert :message="$message" />
                                @enderror
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon" id="password"><i class="icon-verified_user"></i></span>
                                    <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" aria-label="Password" aria-describedby="password">
                                </div>
                                <small class="text-muted">Password must be a minimum of 8 characters.</small>
                                @error('password')
                                    <x-alert :message="$message" />
                                @enderror
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon" id="password"><i class="icon-verified_user"></i></span>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required autocomplete="new-password">
                                </div>

                                <div class="actions clearfix">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Reset Password') }}
                                    </button>
                                </div>
                                <div class="actions clearfix"></div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
                            <div class="login-slider"></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
