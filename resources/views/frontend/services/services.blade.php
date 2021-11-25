@extends('layouts.frontend')
@section('title', 'Services')
@section('content')

<main id="main">
    <x-breadcrumb name="Services" />

    <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Our Services</h2>
            <p>Our mission is to enhance the structure of businesses, especially SMEs through innovative management of all resources, coaching/mentoring and the deployment of cutting edge human capital management tools thereby increasing value for all our stakeholders.</p>
        </div>

        <div class="row features">
            <div class="col-lg-12 col-md-12 mt-4" data-aos="fade-up">
                <div class="icon-box">
                    <i class="ri-store-line" style="color: #29cc61;"></i>
                    <h3><a href="#">Business Development</a></h3>
                </div>
                <div class="container custom-box">
                    <p>
                        Fee as stated on the Bank of Industry Website:<br>
                        <a href="https://www.boi.ng/smeconsultants/" target="_blank">https://www.boi.ng/smeconsultants/</a>
                    </p>
                    <h6>Access Loan</h6>
                        <ul>
                            <li>Creative Industry Loan (CIFI): From ₦30,000</li>
                            <li>CBN Medical Intervention Fund: From ₦100,000</li>
                        </ul>
                    <h6>Coaching</h6>
                    <p>Coaching Fee: ₦20,000/hour. It covers the following:</p>
                    <ul>
                        <li>Access to finance</li>
                        <li>Access to Markets</li>
                        <li>Competitiveness</li>
                        <li>Managing Business Growth</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 mt-4" data-aos="fade-up">
                <div class="icon-box">
                    <i class="ri-gradienter-line" style="color: #47aeff;"></i>
                    <h3><a href="#">HR Consulting</a></h3>
                </div>
                <div class="container custom-box">
                    <p>SMEs = From ₦500,000</p>
                    <p>Medium = From ₦2,000,000</p>
                    <h6>Recruitment</h6>
                        <ul>
                            <li>Between 10 – 15% of Gross Salary for the position</li>
                        </ul>
                    <h6>Process Documentation (SOPs, QMS, etc.)</h6>
                    <ul>
                        <li>Subjective</li>
                    </ul>
                    <h6>HR Department Functions</h6>
                    <ul>
                        <li>₦300,000 monthly</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 mt-4" data-aos="fade-up">
                <div class="icon-box">
                    <i class="ri-file-list-3-line" style="color: #ffa76e;"></i>
                    <h3><a href="#">Outsourcing</a></h3>
                </div>
                <div class="container custom-box">
                    <p>Depending on the total emolument, a rate of 10 - 25% Management Fee will be charged on total gross pay for employees on the payroll.</p>
                    <h6>Some features:</h6>
                        <ul>
                            <li>Payroll Management</li>
                            <li>Onboarding</li>
                            <li>Conflict Resolution</li>
                            <li>Severance</li>
                        </ul>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 mt-4" data-aos="fade-up">
                <div class="icon-box">
                    <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
                    <h3><a href="#">Technical Training</a></h3>
                </div>
                <div class="container custom-box">
                    <p>Please refer to the Training Calendar</p>
                </div>
            </div>
        </div>
    </section><!-- End Features Section -->
</main>

@endsection
