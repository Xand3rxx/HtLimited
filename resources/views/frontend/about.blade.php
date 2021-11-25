@extends('layouts.frontend')
@section('title', 'About Us')
@section('content')

<main id="main">

  <x-breadcrumb name="About" />

  <!-- ======= About Us Section ======= -->
  <section id="about-us" class="about-us">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>About Us</strong></h2>
      </div>

      <div class="row content">
        <div class="col-lg-6" data-aos="fade-right">
          <a href="{{ route('frontend.index') }}" class="logo mr-auto"><img src="{{ asset('img/logo.png') }}" alt="HT Limited logo" width="50%" class="img-fluid"></a><br /><br />
          <p>
              <strong>HT Business Consulting Limited</strong> is a Business Management Consulting firm offering support in business development, human resources management and administration. We are Business Development Service providers for the Federal Ministry of Trade and Industry/World Bank, GEM project, Bank of Industry and Access Bank.
          </p>

          <p>We are Business Development Service providers for the Federal Ministry of Trade and Industry/World Bank, GEM project, Bank of Industry and Access Bank.</p>

          <p>Our Principal Consultant is a certified Business Coach and trainer in the International Labour Organisation (ILO) business management training Start and Improve your Business (SIYB). She has been a marker for you Win from inception till date and is a mentor of entrepreneurs on various intervention programs and FATE Foundation.</p>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">


            <p><strong>HT Limited</strong> is also one of the consulting firms that took part in the USAID Project NEXXT and DFID DEEPEN Project.</p>

            <p>HT Business Consulting Limited is a member of the Chartered Institute of Personnel Management in Nigeria, with an office in Lagos, Nigeria.</p>
          <ul>
            <h4>We Offer:</h4>
            <li><i class="ri-check-double-line"></i> Business Development Services</li>
            <li><i class="ri-check-double-line"></i> Consulting</li>
            <li><i class="ri-check-double-line"></i> HR Outsourcing</li>
            <li><i class="ri-check-double-line"></i> MSME Optimisation</li>
            <li><i class="ri-check-double-line"></i> Recruitment</li>
            <li><i class="ri-check-double-line"></i> Training</li>
          </ul>
          <p class="font-italic">
            {{ config('site-settings.site_tagline') }}
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->

  <!-- ======= Our Core Benefits Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>What We Do</strong></h2>
      </div>

      <div class="features row">
        <div class="col-lg-4 col-md-4 align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <i class="ri-store-line" style="color: #ffbb2c;"></i>
              <h3><a href="#">Business Development</a></h3>
            </div>
            <div class="icon-box">
                <ul class="text-left">
                    <li> USAID|NIGERIA Loan</li>
                    <li> Bank of Industry Loan</li>
                </ul>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 mt-md-0 align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
              <h3><a href="#">Consultancy</a></h3>
            </div>
            <div class="icon-box">
                <ul class="text-left">
                    <li> SME Optimization</li>
                    <li> Managerial Consultancy</li>
                    <li> Mantoring/Advisory</li>
                    <li> Training</li>
                </ul>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 mt-md-0 align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
              <h3><a href="#">HR Solution</a></h3>
            </div>
            <div class="icon-box">
                <ul class="text-left">
                    <li> Outsourcing</li>
                    <li> Recruitment</li>
                    <li> HR Management</li>
                    <li> HR Administration</li>
                </ul>
            </div>
          </div>

       </div>

    </div>
  </section><!-- End Our Core Benefits Section -->

  <!-- ======= Features Section ======= -->
  <section id="features" class="features">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Our mission</h2>
        <p>Our mission is to enhance the structure of businesses, especially SMEs through innovative management of all resources, coaching/mentoring and the deployment of cutting edge human capital management tools thereby increasing value for all our stakeholders.</p>
      </div>
    </div>
  </section>

  <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Our Core Values</h2>
      </div>

      <div class="row features">

        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-database-2-line" style="color: #47aeff;"></i>
            <h3><a href="#">Integrity</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
            <h3><a href="#">Professionalism</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
            <h3><a href="#">Excellence</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
            <h3><a href="#">Customer Focus</a></h3>
          </div>
        </div>

        <div class="col-lg-12 col-md-12 mt-4">
          <div class="icon-box">
            <i class="ri-anchor-line" style="color: #b2904f;"></i>
            <h3><a href="">Why choose us?</a></h3>
          </div>
          <div class="icon-box">
            <ul class="text-left">
                <li> Experienced Professionals</li>
                <li> Partners & Affilations</li>
                <li> Result Oriented Projects</li>
                <li> Practical Solutions</li>
            </ul>
        </div>
        </div>

      </div>
    </div>
  </section><!-- End Features Section -->

  <section id="contact" class="services contact">
    <div class="container" style="background-color: #559c75; color: #fff">
        <div class="row justify-content-center" data-aos="fade-up">
            <div class="col-lg-112">
            <div class="info-wrap">
                <div class="row">
                <div class="col-lg-12 info mt-4 mt-lg-0" style="background-color: #559c75; color: #fff">
                    <h3 class="font-weight-bold">Would you like to start a project with us?</h3>
                    <h5>Want professional Business Development, Consultancy and HR solutions from our group of experienced personnel in other to mobilize your team effectively.</h5>
                    <i class="icofont-phone"></i>
                    <p><a style="color: #fff !important;" href="tel:{{ config('site-settings.site_phone_number') }}">{{ config('site-settings.site_phone_number') }}</a></p>

                    @if(!empty(config('site-settings.site_alternative_phone_number')))
                        <p><a style="color: #fff !important;" href="tel:{{ config('site-settings.site_alternative_phone_number') }}">{{ config('site-settings.site_alternative_phone_number') }}</a></p>
                    @endif
                </div>
                </div>
            </div>

            </div>

        </div>
    </div>
  </section>

</main>
@endsection
