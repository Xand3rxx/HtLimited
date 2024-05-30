@extends('layouts.frontend')
@section('title', 'Improve Your Business Training')
@section('content')

<main id="main">
    <x-breadcrumb name="Improve Your Business" />
    <x-hero-section image="/assets/frontend/img/slide/slide-1.jpg" title="Improve Your Business" sub-title="Improve Your Business (IYB), using the globally renowned ILO methodology of experiential learning." />

    <section id="features" class="features">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            {{-- <div class="section-title">
                <h2>Improve Your Business</h2>
                <p>Improve Your Business (IYB), using the globally renowned ILO methodology of experiential learning.</p>
            </div> --}}
            <div class="container">

                <h5 class="mt-10">What makes IYB unique and how does it benefit entrepreneurs?</h5>
                <ul>
                    <li><span class="font-weight-bold">Helps your business work better:</span> Persons who already own businesses, can with the help of IYB training improve their performance in various aspects, like costing, planning, record keeping, buying and stock control functions, and thereby substantially increase profits and create jobs in the process.</li>

                    <li><span class="font-weight-bold">More than just basic business management training:</span> In addition to building skills in business management, entrepreneurs through the IYB partner organizations can access a wide range of other business development services, credit and other financial services; or these organizations can direct them to associations/agencies that provide services that meet their requirement.</li>

                    <li><span class="font-weight-bold">Simplicity and adaptability: IYB</span>  training materials are easy to understand and are available in about 40 languages. IYB has also been adapted to cater to the entrepreneurial needs of illiterate to low literacy level target groups. IYB is easily adaptable for rural business operations or agriculture related enterprises. It has been adapted for eco-tourism, fisheries and timber products in Papua New Guinea, construction in South Africa, various farm activities in Senegal and green business in India.</li>

                    <li><span class="font-weight-bold">High impact and vast outreach: IYB</span> has been introduced in more than 100 countries to more than 6 million trainees. It can rely on more than 200 certified Master Trainers, a network of over 17,000 Trainers and 2500 partner organizations. In the past ten years, IYB training has led to the creation of about 4 million jobs.</li>

                    <li><span class="font-weight-bold">Brand Value:</span> In many countries IYB has acquired the status of a brand that stands for quality business management training. This includes recognition by public and private networks.</li>

                </ul>

                {{-- <h6>Training Details</h6>
                <ul>
                    <li><span class="font-weight-bold">Price:</span> ₦60,000</li>
                    <li><span class="font-weight-bold">Date:</span> April 12th – April 25th 2021</li>
                    <li><span class="font-weight-bold">Venue:</span> 23, Hawley Street, Lagos Island. Lagos – Nigeria.</li>
                </ul> --}}

                <h6>For More Enquries!</h6>
                <p>
                    <a href="mailto:training@ht-limitedng.net">Send mail to: training@ht-limitedng.net</a>
                    <br>
                    <a href="tel:+23481370409030" target="_blank">Call us on: +23481370409030</a>
                </p>
            </div>
        </div>
    </section>

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="section-title">
                <h2>Testimonials from Past Participants</h2>
            </div>
            <div class="container">
                <div class="row">

                    <div class="col-lg-12" data-aos="fade-up">
                    <div class="testimonial-item">
                        <img src="{{ asset('assets/frontend/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                        <h3>Ebiemere Ake-Dio</h3>
                        <h4>Chief Operating Officer, Pleasant Smiles Foods n Grills</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Improve Your Business for me was a business clinic, irrespective of how long you have been in business. When I attended IYB my eyes were opened up to a whole lot I was not doing properly. The life experiential examples and practical examples drove home the points for me. I learnt a whole lot. Costing, customer service, inventory, quality control, marketing among others. At the end of training I realized I was running an NGO as it were. I now know how to cost my products properly. I am so glad I attended I encourage you to be part of the next session.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Testimonials Section -->

    @include('frontend.forms.training')

</main>
@endsection

