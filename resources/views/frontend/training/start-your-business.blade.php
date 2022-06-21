@extends('layouts.frontend')
@section('title', 'Start Your Business Training')
@section('content')

<main id="main">
    <x-breadcrumb name="Start Your Business" />

    <section id="features" class="features">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="section-title">
                <h2>Start Your Business</h2>
            </div>
            <div class="container">

                <h3 class="text-center">ALL YOU NEED TO CREATE A SUSTAINABLE BUSINESS STRUCTURE!</h3>

                <p>A plan without structure crumbles, so is a brand without core values, all these contribute to building a successful business. Sign up for our 5-day  SYB (Start Your Business)  to know more about this.</p>

                <h5 class="mt-10">Start Your Business</h5>
                <h6>Content</h6>
                <p>The training includes nine parts as follows:</p>
                <ul>
                    <li>Business plan - Introduction</li>
                    <li>Reinforce your business idea</li>
                    <li>Marketing plan</li>
                    <li>Staffing</li>
                    <li>Organization and management</li>
                    <li>Buying for your business</li>
                    <li>Costing your goods and services</li>
                    <li>Financial planning</li>
                    <li>Start-up capital</li>
                    <li>Finalize your business plan</li>
                </ul>

                <h6>Objectives</h6>
                <ol>
                    <li>To describe the content of a Business Plan.</li>
                    <li>To consolidate your business idea.</li>
                    <li>To translate your business idea into a completed Business Plan.</li>
                    <li>To assess your readiness for starting a business.</li>
                </ol>

                <h6>Duration</h6>
                <ul>
                    <li>This training lasts for five days spread over two weeks. Training starts from February 1st - February 12th, 2021.</li>
                    <li>Start Your Business (SYB) is a manual for people who have a practical business idea and want to start a new business.</li>
                    <li>It introduces the proper steps for starting a business and creating a Business Plan for the proposed venture.</li>
                    <li>Participants get an SYB Business Plan booklet which is to be completed as you go through the training at the end of which participants will have a bankable business plan.</li>
                </ul>

                <h6>Amount</h6>
                <p>₦45,000</p>

                <h6>For More Enquries!</h6>
                <p>
                    <a href="mailto:training@ht-limitedng.net">Send mail to: training@ht-limitedng.net</a>
                    <br>
                    <a href="tel:+23481370409030" target="_blank">Call us on: +23481370409030</a>
                </p>
            </div>
        </div>
    </section>

    <!-- ======= Participants from last training ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="section-title">
                <h2>Participants from last training</h2>
            </div>

            <div class="container">

                <div class="row portfolio-container" data-aos="fade-up">

                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <img src="{{ asset('assets/frontend/img/training/training-1.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Photo 1</h4>
                            <a href="{{ asset('assets/frontend/img/training/training-1.jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Photo 1"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <img src="{{ asset('assets/frontend/img/training/training-2.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Photo 2</h4>
                            <a href="{{ asset('assets/frontend/img/training/training-2.jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Photo 2"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <img src="{{ asset('assets/frontend/img/training/training-3.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Photo 3</h4>
                            <a href="{{ asset('assets/frontend/img/training/training-3.jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Photo 3"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <img src="{{ asset('assets/frontend/img/training/training-4.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Photo 4</h4>
                            <a href="{{ asset('assets/frontend/img/training/training-4.jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Photo 4"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <img src="{{ asset('assets/frontend/img/training/training-5.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Photo 5</h4>
                            <a href="{{ asset('assets/frontend/img/training/training-5.jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Photo 5"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>

                </div>

                </div>
        </div>
    </section><!-- End Participants from last training -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="section-title">
                <h2>Testimonials from Past Participants</h2>
            </div>
            <div class="container">
                <div class="row">

                    <div class="col-lg-6" data-aos="fade-up">
                    <div class="testimonial-item">
                        <img src="{{ asset('assets/frontend/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                        <h3>Adebisi</h3>
                        <h4>Berah Havens Limited</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            My name is Adebisi, I attended the program last year in August, I was tremendously impacted starting from the beginning of the course to the end, I always look forward to coming to class every time I enjoyed the company of my colleagues and the warm reception of our coach from the beginning. The game part of the training is what I loved most, it demystify several problems I have in running my business and made me see my business from a new perspective, it helps me to see what I was doing wrong in running my business and taught me to make changes I learned how to do my business better I learned to write a simple business plan tailored for my business need I learned to manage my I resources well.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="testimonial-item mt-lg-0">
                            <img src="{{ asset('assets/frontend/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                            <h3>Damilare Solaja</h3>
                            <h4>Daresumptuous Foods</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                This is an experiential training organised by HT Limited: a distinguished business consulting firm. The training is highly participatory and insightful. This is one training that I have never regretted participating in. I also like the way the participants' businesses were used as case studies during the cause of the training. The training has inspired me to rethink the way I plan my business and to put some necessary structures in place.
                                From the training, I have learnt how to write a detailed business plan and how to do product costing which I am currently putting to use. I recommend 'Start Your Business' training to anyone in business irrespective of your years in business or if you are planning to start one.
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

