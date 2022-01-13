
@extends('layouts.error')
@section('title', '500 (Internal Server Error)')
@section('content')
<!-- Start main Section -->
<section class="ec-under-maintenance">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="under-maintenance">
                    <h1 style="font-size: 4em !important">Error 500</h1>
                    <h1>Oh no! Internal Server Error.</h1>
                    <a href="{{ route('frontend.index') }}" class="btn btn-lg btn-primary" tabindex="0">Back to Home</a>
                </div>
            </div>
            <div class="col-md-6 disp-768">
                <div class="under-maintenance">
                    <img class="maintenance-img" src="{{ asset('img/background/0b36bd12-dfd2-40ee-8ee3-6033b0d3d665.jpg') }}" alt="maintenance">
                </div>
            </div>
        </div>

        <div class="text-center" style="margin-top: 50px;">
            <div class="container">
                © {{ date('Y') }} HT Limited. All Rights Reserved.
            </div>
        </div>
    </div>
</section>
<!-- End main Section -->
@endsection
