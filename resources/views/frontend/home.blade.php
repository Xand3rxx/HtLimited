@extends('layouts.frontend')
@section('title', 'Home')
@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/frontend/img/slide/slide-1.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Welcome to <span>HT Limited</span></h2>
              <p>We are a Business Management Consulting firm, optimizing your business to develop and implement growth opportunities. </p>
              {{-- <div class="text-center"><a href="" class="btn-get-started">Read More</a></div> --}}
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/frontend/img/slide/slide-2.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Better Team Management</h2>
              <p>{{ config('site-settings.site_tagline') }}</p>
              {{-- <div class="text-center"><a href="" class="btn-get-started">Read More</a></div> --}}
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/frontend/img/slide/slide-3.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>What we guarantee</h2>
              <p>Our Principal Consultant is a certified Business Coach and trainer in the International Labour Organisation (ILO) business management training Start and Improve Your Business (SIYB).</p>
              {{-- <div class="text-center"><a href="" class="btn-get-started">Read More</a></div> --}}
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->

  <main id="main">

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
                HT Business Consulting Limited is a Business Management Consulting firm offering support in business development, human resources management and administration. We are Business Development Service providers for the Federal Ministry of Trade and Industry/World Bank, GEM project, Bank of Industry and Access Bank.
            </p>
            {{-- <p class="font-italic">{{ config('site-settings.site_tagline') }}</p> --}}
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">

            <ul>
              <h4>We Do:</h4>
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
          <h2>Our Core Benefits</strong></h2>
          {{-- <p>Laborum repudiandae omnis voluptatum consequatur mollitia ea est voluptas ut</p> --}}
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <img src="{{ asset('assets/frontend/img/abstract/abstract-6.png') }}" class="img-fluid">
              </div>
              <h4><a href="">Practical Solutions</a></h4>
              <p>We offer unique solutions to clients allowing them focus on mission critical success factors for their business.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <img src="{{ asset('assets/frontend/img/abstract/abstract-3.png') }}" class="img-fluid">
              </div>
              <h4><a href="">Networks</a></h4>
              <p>Client will have access to our large and growing network making it easier to access funds for SME through our partners.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
                <div class="icon">
                    <img src="{{ asset('assets/frontend/img/abstract/abstract-7.png') }}" class="img-fluid">
                  </div>
              <h4><a href="">Productivity</a></h4>
              <p>We enable our clients translate from corporate stategy to actionable plans, increasing productivity.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Our Core Benefits Section -->

    <!-- ======= Our Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>We Work With</h2>
        </div>

        <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
                <img src="{{ asset('assets/frontend/img/clients/client-1.png') }}" class="img-fluid">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
                <img src="{{ asset('assets/frontend/img/clients/client-2.png') }}" class="img-fluid">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
                <img src="{{ asset('assets/frontend/img/clients/client-3.png') }}" class="img-fluid">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
                <img src="{{ asset('assets/frontend/img/clients/client-4.png') }}" class="img-fluid">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
                <img src="{{ asset('assets/frontend/img/clients/client-5.png') }}" class="img-fluid">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
                <img src="{{ asset('assets/frontend/img/clients/client-6.png') }}" class="img-fluid">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
                <img src="{{ asset('assets/frontend/img/clients/client-7.png') }}" class="img-fluid">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
                <img src="{{ asset('assets/frontend/img/clients/client-8.png') }}" class="img-fluid">
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-6">
            <div class="client-logo">
                <img src="{{ asset('assets/frontend/img/clients/affiliation-2.png') }}" class="img-fluid">
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-6">
            <div class="client-logo">
                <img src="{{ asset('assets/frontend/img/clients/client-9.png') }}" class="img-fluid">
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-6">
            <div class="client-logo">
                <img src="{{ asset('assets/frontend/img/clients/client-10.png') }}" class="img-fluid">
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Our Clients Section -->

    <!-- ======= Our Core Area of Specialisation Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Our Core Area of Specialisation</strong></h2>
          </div>

          <div class="row">
            <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box iconbox-blue">
                <div class="icon">
                  <img src="{{ asset('assets/frontend/img/abstract/abstract-2.png') }}" class="img-fluid">
                </div>
                <h4><a href="#">Human Resource Management</a></h4>
                <p>We help organizations verify all aspects of their human resource management needed for proper growth and development.</p>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-md-0" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon-box iconbox-orange ">
                <div class="icon">
                  <img src="{{ asset('assets/frontend/img/abstract/abstract-4.png') }}" class="img-fluid">
                </div>
                <h4><a href="#">Outsourcing</a></h4>
                <p>We offer professional outside help to effectively manage employees needs and enable you focus on improving your core business function.</p>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4 mt-lg-4" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon-box iconbox-pink">
                  <div class="icon">
                      <img src="{{ asset('assets/frontend/img/abstract/abstract-5.png') }}" class="img-fluid">
                    </div>
                <h4><a href="#">Recruitment</a></h4>
                <p>We render corporate personnel placement services designed to match employers to the appropriate job seeker.</p>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4 mt-lg-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="icon-box iconbox-pink">
                    <div class="icon">
                        <img src="{{ asset('assets/frontend/img/abstract/abstract-1.png') }}" class="img-fluid">
                      </div>
                  <h4><a href="#">Business Development</a></h4>
                  <p>We organize training and mentoring sessions for clients in other to provide the necessary support for the growth and development of the organization.</p>
                </div>
              </div>
          </div>

        </div>
    </section><!-- End Our Core Area of Specialisation Section -->

    <!-- ======= Affiliation Section ======= -->
    <section id="clients" class="clients">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Affiliation</h2>
          </div>

          <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

            {{-- <div class="col-lg-4 col-md-4 col-6">
              <div class="client-logo">
                <img src="{{ asset('assets/frontend/img/clients/affiliation-1.png') }}" class="img-fluid">
              </div>
            </div> --}}

            <div class="col-lg-12 col-md-4 col-6">
              <div class="client-logo">
                  <img src="{{ asset('assets/frontend/img/clients/affiliation-2.png') }}" class="img-fluid">
              </div>
            </div>

            {{-- <div class="col-lg-4 col-md-4 col-6">
              <div class="client-logo">
                  <img src="{{ asset('assets/frontend/img/clients/affiliation-3.png') }}" class="img-fluid">
              </div>
            </div> --}}
          </div>

        </div>
    </section><!-- End Affiliation Section -->

    <section id="contact" class="services contact">
        <div class="container">
            <div class="row justify-content-center" data-aos="fade-up">
                <div class="col-lg-112">
                <div class="info-wrap">
                    <div class="row">
                    <div class="col-lg-12 info mt-4 mt-lg-0">
                        <h3 class="font-weight-bold">Would you like to start a project with us?</h3>
                        <h5>Want professional Business Development, Consultancy and HR solutions from our group of experienced personnel in other to mobilize your team effectively.</h5>
                        <i class="icofont-phone"></i>
                        <p><a href="tel:{{ config('site-settings.site_phone_number') }}">{{ config('site-settings.site_phone_number') }}</a></p>

                        @if(!empty(config('site-settings.site_alternative_phone_number')))
                            <p><a href="tel:{{ config('site-settings.site_alternative_phone_number') }}">{{ config('site-settings.site_alternative_phone_number') }}</a></p>
                        @endif
                    </div>
                    </div>
                </div>

                </div>

            </div>
        </div>
    </section>

  </main><!-- End #main -->

@endsection
