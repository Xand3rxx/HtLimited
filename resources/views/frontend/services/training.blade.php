@extends('layouts.frontend')
@section('title', 'Training')
@section('content')

<main id="main">
    <x-breadcrumb name="Training" />

     <!-- ======= Benefits ======= -->
     <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Training Programs</strong></h2>
            <p>Expand the knowledge base of your employees</p>
            <p>Goal-oriented training designed to ensure cost and time are properly invested in other to increase employees knowledge base and performance at work</p>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box iconbox-blue">
                <div class="icon">
                  <img src="{{ asset('assets/frontend/img/others/our-consideration.png') }}" class="img-fluid">
                </div>
                <h4><a href="#">Our Consideration</a></h4>
                <p>Our training is planned and executed with four primary considerations of our client and partner in other to offer the best solution</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon-box iconbox-orange ">
                <div class="icon">
                  <img src="{{ asset('assets/frontend/img/others/client-needs.png') }}" class="img-fluid">
                </div>
                <h4><a href="#">Client Need</a></h4>
                <p>We tailor our training to the client specific needs, which are know via the detailed analysis carried out on organization.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="300">
                <div class="icon-box iconbox-orange ">
                  <div class="icon">
                    <img src="{{ asset('assets/frontend/img/others/appropriate-content.png') }}" class="img-fluid">
                  </div>
                  <h4><a href="#">Appropriate Content</a></h4>
                <p>Content used in training are specified to the clients needs and contain the right tools necessary to help overcome the identified challenge.</p>
                </div>
              </div>

            <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4 mt-lg-4" data-aos="zoom-in" data-aos-delay="400">
                <div class="icon-box iconbox-pink">
                    <div class="icon">
                        <img src="{{ asset('assets/frontend/img/others/experienced-facilitators.png') }}" class="img-fluid">
                      </div>
                  <h4><a href="#">Experienced Facilitators</a></h4>
                  <p>Our instructors are active practitioners with years' experience in the field, they anticipate clients challenge and provide practical solutions.</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4 mt-lg-4" data-aos="zoom-in" data-aos-delay="500">
                <div class="icon-box iconbox-pink">
                    <div class="icon">
                        <img src="{{ asset('assets/frontend/img/others/training-approach.png') }}" class="img-fluid">
                      </div>
                  <h4><a href="#">Training Approach</a></h4>
                  <p>The approach taken by our facilitators during the period of training varies with clients unique challenge and are effective on teaching client new models.</p>
                </div>
            </div>
          </div>

        </div>
    </section><!-- End Our Core Area of Specialisation Section -->

    <section id="features" class="features">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="section-title">
                <h2>Our Offer</h2>
            </div>
            <div class="container">
                <p>Training presents a prime opportunity to expand the knowledge base of all employees, but many employers find the development opportunities expensive. Employees also miss out on work time while attending training sessions, which may delay the completion of projects. Despite the potential drawbacks, training and development provides both the company as a whole and the individual employees with benefits that make the cost and time a worthwhile investment.<p>

                <p>An employee who receives the necessary training is better able to perform her job. She becomes more aware of safety practices and proper procedures for basic tasks. The training may also build the employee’s confidence because she has a stronger understanding of the industry and the responsibilities of her job. This confidence may push her to perform even better and think of new ideas that help her excel. Continuous training also keeps your employees on the cutting edge of industry developments. Employees who are competent and on top of changing industry standards help your company hold a position as a leader and strong competitor within the industry.<p>

                <p>HT-Limited Training is a goal-oriented tool which is vital in any company or organization that aims at progressing. Training simply refers to the process of acquiring the essential skills required for a certain job. Our Training targets specific goals, for instance understanding a process and operating a certain system.</p>

                {{-- <h5 class="mt-10">Technical Training</h5>
                <p>
                    Please refer to the Training Calendar<br>
                    <a href="#" download>HT-Limited 2020 Training Calendar(PC)</a>
                </p> --}}

            </div>
        </div>
    </section>
</main>
@endsection

