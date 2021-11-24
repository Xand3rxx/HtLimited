 <!-- ======= Breadcrumbs ======= -->
 <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>{{ $name }}</h2>
        <ol>
          <li><a href="{{ route('frontend.index') }}">Home</a></li>
          @if (Route::currentRouteNamed('frontend.services_human_resources', 'frontend.services_consultancy_services', 'frontend.services_business_development', 'frontend.services_human_resources', 'frontend.services_outsourcing', 'frontend.services_recruitment'))
            <li><a href="{{ route('frontend.services') }}">Services</a></li>
          @endif
          <li>{{ $name }}</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->
