@extends('layouts.frontend')
@section('title', 'Contact Us')
@section('content')

<main id="main">
    <x-breadcrumb name="Contact Us" />

    <!-- ======= Contact Section ======= -->
    <div class="map-section">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.559479721858!2d3.4007808145816276!3d6.45055619533326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8b3cc6fa2bd1%3A0x8cc7bf42b3b294f!2sHt%20Limited!5e0!3m2!1sen!2sng!4v1639384800629!5m2!1sen!2sng" frameborder="0" allowfullscreen loading="lazy">
        </iframe>
    </div>

    <section id="contact" class="contact">
    <div class="container">

        <div class="row justify-content-center" data-aos="fade-up">

        <div class="col-lg-10">

            <div class="info-wrap">
            <div class="row">
                <div class="col-lg-4 info">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>{{ config('site-settings.site_address') }}</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>{{ config('site-settings.email') }}</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>
                    {{ config('site-settings.site_phone_number') }}@if(!empty(config('site-settings.site_alternative_phone_number')))<br> {{ config('site-settings.site_alternative_phone_number') }}@endif
                </p>
                </div>
            </div>
            </div>

        </div>

        </div>

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
        <div class="col-lg-10">
            <form action="{{ route('frontend.send_contact_us') }}" method="POST" role="form" class="php-email-form">
                @csrf
            <div class="form-row">
                <div class="col-md-6 form-group">
                <input type="text" name="full_name" class="form-control" id="full_name" placeholder="Your Name" value="{{ old('full_name') }}" />
                @error('full_name')
                    <x-alert :message="$message" />
                @enderror
                </div>
                <div class="col-md-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" value="{{ old('email') }}" />
                @error('email')
                    <x-alert :message="$message" />
                @enderror
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" value="{{ old('subject') }}" />
                @error('subject')
                    <x-alert :message="$message" />
                @enderror
            </div>
            <div class="form-group">
                <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="5" placeholder="Message">{{ old('message') }}</textarea>
            </div>

            <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
        </div>

        </div>

    </div>
    </section><!-- End Contact Section -->

</main>
@endsection

