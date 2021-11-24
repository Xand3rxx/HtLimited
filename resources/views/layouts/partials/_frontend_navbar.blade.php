<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      {{-- <h1 class="logo mr-auto"><a href="index.html"><span>HT</span> Limited</a></h1> --}}
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="{{ route('frontend.index') }}" class="logo mr-auto"><img src="{{ asset('img/logo.png') }}" alt="HT Limited logo" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="{{ Route::currentRouteNamed('frontend.index') ? 'active' : '' }}"><a href="{{ route('frontend.index') }}">Home</a></li>

          <li class="drop-down"><a href="#">About</a>
            <ul>
              <li class="{{ Route::currentRouteNamed('frontend.about') ? 'active' : '' }}"><a href="{{ route('frontend.about') }}">About Us</a></li>
              <li class="{{ Route::currentRouteNamed('frontend.our_team') ? 'active' : '' }}"><a href="{{ route('frontend.our_team') }}">Our Team</a></li>
            </ul>
          </li>

          <li class="drop-down"><a href="#">Services</a>
            <ul>
                <li><a href="{{ route('frontend.services') }}">Services</a></li>
                <li class="drop-down"><a href="#">Consultancy</a>
                    <ul>
                        <li class="{{ Route::currentRouteNamed('frontend.services_consultancy_services') ? 'active' : '' }}"><a href="{{ route('frontend.services_consultancy_services') }}">Consultancy Services</a></li>
                        <li class="{{ Route::currentRouteNamed('frontend.services_business_development') ? 'active' : '' }}"><a href="{{ route('frontend.services_business_development') }}">Business Development</a></li>
                    </ul>
                </li>

                <li class="drop-down"><a href="#">Human Resources Management</a>
                    <ul>
                        <li class="{{ Route::currentRouteNamed('frontend.services_human_resources') ? 'active' : '' }}"><a href="{{ route('frontend.services_human_resources') }}"> Human Resources Management</a></li>
                        <li class="{{ Route::currentRouteNamed('frontend.services_outsourcing') ? 'active' : '' }}"><a href="{{ route('frontend.services_outsourcing') }}">Outsourcing</a></li>
                        <li class="{{ Route::currentRouteNamed('frontend.services_recruitment') ? 'active' : '' }}"><a href="{{ route('frontend.services_recruitment') }}">Recruitment</a></li>
                    </ul>
                </li>
            </ul>
          </li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="{{ route('frontend.contact') }}">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <div class="header-social-links">
        <a href="{{ config('site-settings.twitter_link') }}" target="_blank"><i class="icofont-twitter"></i></a>
        <a href="{{ config('site-settings.facebook_link') }} " target="_blank"><i class="icofont-facebook"></i></a>
        <a href="{{ config('site-settings.instagram_link') }}" target="_blank"><i class="icofont-instagram"></i></a>
        <a href="{{ config('site-settings.linkedin_link') }}" target="_blank"><i class="icofont-linkedin"></i></a>
      </div>

    </div>
  </header><!-- End Header -->
