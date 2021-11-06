@extends('layouts.app')
@section('title', 'Registration')
@section('content')
<div class="container">
    <div class="login-screen row align-items-center">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="login-container">
                    <div class="row no-gutters">
                        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                            <div class="login-box">
                                <a href="#" class="login-logo">
                                    <img src="{{ asset('img/logo.png') }}" alt="HT Limited logo" />
                                </a>
                                <div class="input-group">
                                    <span class="input-group-addon" id="name"><i class="icon-account_circle"></i></span>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name" required autocomplete="name" autofocus>
                                    @error('name')
                                        <x-alert :message="$message" />
                                    @enderror
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon" id="email-1"><i class="icon-envelope"></i></span>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <x-alert :message="$message" />
                                    @enderror
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon" id="password"><i class="icon-verified_user"></i></span>
                                    <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    {{-- <br>
                                    <small class="text-muted">
                                        Use a minimum of 8 characters. For a strong and secure
                                        password,<br />
                                        a mix of letters, numbers & symbols is advised.
                                      </small> --}}
                                    @error('password')
                                        <x-alert :message="$message" />
                                    @enderror
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon" id="password"><i class="icon-verified_user"></i></span>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                                </div>
                                <div class="actions clearfix">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Signup') }}
                                    </button>
                                </div>
                                <div class="or"></div>
                                <div class="mt-4">
                                    <a href="{{ route('login') }}" class="additional-link">Already have an Account? <span>Login Now</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
                            <div class="signup-slider"></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
