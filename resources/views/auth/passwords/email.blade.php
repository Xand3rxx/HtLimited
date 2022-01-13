@extends('layouts.app')
@section('title', 'Forgot Password')
@section('content')

<div class="container">
    <div class="login-screen row align-items-center">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="login-container">
                    <div class="row no-gutters">
                        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                            <div class="login-box">
                                <a href="#" class="login-logo">
                                    <img src="{{ asset('img/logo.png') }}" alt="HT Limited logo" />
                                </a>
                                <div class="input-group">
                                    <span class="input-group-addon" id="email"><i class="icon-account_circle"></i></span>
                                    <input id="email" placeholder="Email Address" type="email" class="form-control @error('password') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus autocomplete="email" aria-label="email" aria-describedby="email">
                                </div>
                                @error('email')
                                    <x-alert :message="$message" />
                                @enderror
                                <br>
                                <div class="actions clearfix">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Send Password Reset Link') }}
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
