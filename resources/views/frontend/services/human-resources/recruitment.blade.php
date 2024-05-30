@extends('layouts.frontend')
@section('title', 'Recruitment')
@section('content')

<main id="main">
    <x-breadcrumb name="Recruitment" />
    <x-hero-section image="/assets/frontend/img/slide/slide-1.jpg" title="Recruitment" sub-title="Matching clients to the right employee" />

    <section id="features" class="features">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            {{-- <div class="section-title">
                <h2>Recruitment</h2>
                <p>Matching clients to the right employee</p>
            </div> --}}
            <div class="container">
                <p>Our corporate personnel placement services bridge the gap between talented job seekers and their ideal employers, aiming for a perfect match. We take a personalized approach, getting to know our clients' businesses and specific needs. Then, we leverage our expertise and network to identify and recruit top candidates who align with their requirements. Our goal is to facilitate successful connections, foster long-term relationships, and drive business growth.</p>

                <h5 class="mt-10">Challenge</h5>
                <p>Recruiting staff is a very costly exercise. It is also an essential part of any business and it pays to do it properly. When organizations choose the right people for the job, train them well and treat them appropriately, these people not only produce good results but also tend to stay with the organization longer. In such circumstances, the organization’s initial and ongoing investment in them is well rewarded. An organization may have all of the latest technology and the best physical resources, but if it does not have the right people it will struggle to achieve the results it requires.</p>
            </div>
        </div>
    </section>

     <!-- ======= Benefits ======= -->
     <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Benefits</strong></h2>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box iconbox-blue">
                <div class="icon">
                  <img src="{{ asset('assets/frontend/img/others/save-resources.png') }}" class="img-fluid">
                </div>
                <h4><a href="#">Save Resources</a></h4>
                <p>Our detailed information helps you quickly identify the best candidates without wasting time and money on unqualified prospects.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon-box iconbox-orange ">
                <div class="icon">
                  <img src="{{ asset('assets/frontend/img/others/temporary-staff.png') }}" class="img-fluid">
                </div>
                <h4><a href="#">Temporary Staff</a></h4>
                <p>We provide staff to companies that need to fill positions on temporary basis. Our charges are hourly or daily based on our client’s needs.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="300">
                <div class="icon-box iconbox-orange ">
                  <div class="icon">
                    <img src="{{ asset('assets/frontend/img/others/outsource-manpower.png') }}" class="img-fluid">
                  </div>
                  <h4><a href="#">Outsourcing Manpower</a></h4>
                <p>We take the work load off Human Resources Departments by running Outsourcing and Manpower Services for different categories of staff.</p>
                </div>
              </div>

            <div class="col-lg-4 col-md-4 d-flex align-items-stretch mt-4 mt-lg-4" data-aos="zoom-in" data-aos-delay="400">
                <div class="icon-box iconbox-pink">
                    <div class="icon">
                        <img src="{{ asset('assets/frontend/img/others/job-hunt.png') }}" class="img-fluid">
                      </div>
                  <h4><a href="#">Job Hunting</a></h4>
                  <p>Using our extensive network we actively search for suitable applicants to suit the specific needs of our clients getting the right people for the job.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 d-flex align-items-stretch mt-4 mt-lg-4" data-aos="zoom-in" data-aos-delay="500">
                <div class="icon-box iconbox-pink">
                    <div class="icon">
                        <img src="{{ asset('assets/frontend/img/others/recruitment-process.png') }}" class="img-fluid">
                      </div>
                  <h4><a href="#">Recruitment Process</a></h4>
                  <p>We do the complete recruitment process of interviewing applicants and providing skilled appraisal of their skills.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 d-flex align-items-stretch mt-4 mt-lg-4" data-aos="zoom-in" data-aos-delay="600">
                <div class="icon-box iconbox-pink">
                    <div class="icon">
                        <img src="{{ asset('assets/frontend/img/others/regular-review.png') }}" class="img-fluid">
                      </div>
                  <h4><a href="#">Regular Review</a></h4>
                  <p>Reviewing from time to time our files for qualified candidates to fill jobs that are listed with the Company.</p>
                </div>
            </div>
          </div>

        </div>
    </section><!-- End Our Core Area of Specialisation Section -->

    <section id="features" class="features">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="section-title">
                <h2>Who we recruit</h2>
            </div>
            <div class="container">
                <p>We recruit different categories of staff from entry to CEO level. Areas in which we recruit include; Administration, Marketing, ICT, Accounting, Human Resources, Construction, Quality Control, Law, Customer Care, Logistics, Procurement and Purchasing, Medicine and Education. We also recruit for the Hospitality Industry. Drivers, Secretaries are outsourced to us.<p>

                <p>We recruit different levels of staff in Administration, Marketing, Accounting, Human Resources, Engineering, Property/Estate Management, Quality Control, Law, Customer Care, Logistics, Procurement and Purchasing, Medicine and Education. We also offer outsourcing services for, Drivers, Secretaries, Administrative Assistants.<p>
            </div>
        </div>
    </section>
</main>
@endsection

