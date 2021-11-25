@extends('layouts.frontend')
@section('title', 'Business Continuity Plan Training')
@section('content')
<style>
    .testimonials .testimonial-item .testimonial-img {
        width: 200px !important;
    }
    .ml-custom  {
        margin-left: 11.5rem !important;
    }

    @media screen and (min-width: 360px){
            .ml-custom  {
            margin-left: .001rem !important;
        }
    }

    @media screen and (min-width: 414px){
            .ml-custom  {
            margin-left: .001rem !important;
        }
    }

    @media screen and (min-width: 600px){
        .ml-custom  {
            margin-left: 11.5rem !important;
        }
    }

    @media screen and (min-width: 1000px){
        .ml-custom  {
            margin-left: 11.5rem !important;
        }
    }

</style>
<main id="main">
    <x-breadcrumb name="Business Continuity Plan Training" />

    <section id="features" class="features">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="section-title">
                <h2>Business Continuity Plan Training</h2>
            </div>
            <div class="container">
                <h3 class="text-center">Introduction to Business Continuity & Resilience Supporting MSMEs in Nigeria in time of crisis</h3>

                <p>WMSMEs and their workers are hard-hit by the present COVID-19 outbreak, local crisis and related economic downturn. In response to the crisis, governments and enterprises are implementing strategies to minimize the negative impacts, supporting business operations and protecting workers’ rights, heading towards resilience.</p>

                <h5 class="mt-10">Introduction</h5>
                <p>There are a range of policy and programming options to support MSMEs during different types of crises, including the present Covid-19 crisis. These policies can be of diverse nature: fiscal, monetary, financial, foreign exchange, foreign trade, labor and social. Which policies and support programs are more adequate in the present situation, depends on the local context as well as on the available resources.</p>

                <h5 class="mt-10">Workshop Objectives</h5>
                <p>The workshop’s main objective is to help and support MSMEs to develop and implement the content of a Business Continuity and Resilience plan to implement in their businesses; maintain their operation protect their working capital; protect their employment and social security workforce while maintaining social cohesion and social dialogue.</p>
                <p>
                    The workshop period is for 6 full days. It can be squeezed into half days and can be divided into 2 separate workshop/subjects
                    <ol>
                        <li>Business Continuity</li>
                        <li>Resilience at work.</li>
                    </ol>
                </p>
                <p>Upon successful completion, the participating MSMEs will be able to anticipate, identify, assess, and prepare responses to crises that threaten not only the financial status but also the sustainability and survival of the enterprise.</p>

                <h5 class="mt-10">Place of Work</h5>
                <p>Workshop conducted virtually via Zoom. Attendees to have a proper Internet connection. (If possible 4G)</p>

                <h5 class="mt-10">Payment/Fees</h5>
                <ul>
                    <li><span class="font-weight-bold">Price:</span> ₦90,000</li>
                </ul>

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
                <h2>About the Facilitator</h2>
                <h4>Most important things to know about Jamil Assemaani</h4>
            </div>
            <div class="container">
                <div class="row">

                    <div class="col-lg-12" data-aos="fade-up">
                    <div class="testimonial-item">
                        <img src="{{ asset('assets/frontend/img/testimonials/jamil-assemaani.jpg') }}" class="testimonial-img" alt="Jamil Assemaani" class="image-fluid">
                        <h3>Jamil Assemaani</h3>
                        {{-- <h4>Chief Operating Officer, Pleasant Smiles Foods n Grills</h4> --}}
                        <div class="ml-custom">
                            <ol class="font-weight-bold">
                                <li>Master Licensee of ActionCOACH (USA).</li>
                                <li>Over 30 years of work experience in Lebanon and in the GCC.</li>
                                <li>Before joining ActionCOACH network in 2012, I held several positions in sales and marketing management in many industries.</li>
                                <li>With ActionCOACH, I helped business owners to develop their business, make it more profitable, and take it to the next level.</li>
                                <li>Concurrently, I taught in different universities in Lebanon and abroad and conducted various training and development programs for my clients’ teams.</li>
                                <li>My clients range from service providers, automotive dealers to retail and wholesale businesses, international organizations (ILO; UNESCO) to NGOs, etc.
                                </li>
                            </ol>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Testimonials Section -->

    <section id="features" class="features">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="section-title">
                <h2>Workshop/Program Content</h2>
            </div>
            <div class="container">

                <h5 class="mt-10">A. Know your business priorities</h5>
                <ul>
                    <li>Key business products/ services</li>
                    <li>Critical activities</li>
                    <li>Support to critical activities</li>
                    <li>The 7 steps for take to prevent and prepare for pandemic and crisis.</li>
                </ul>

                <h5 class="mt-10">B. Analyze the risks</h5>
                <ul>
                    <li>Impact on your community</li>
                    <li>Impact on your business</li>
                    <li>Risks rating and assessment</li>
                </ul>

                <h5 class="mt-10">C. Reduce the impact of the risks</h5>
                <ul>
                    <li>Knowledge management</li>
                    <li>Flexible work practices</li>
                    <li>Supply Chain</li>
                    <li>Communication</li>
                    <li>Policy, insurance and security measures</li>
                    <li>Case study</li>
                </ul>

                <h5 class="mt-10">D. Identify response actions</h5>
                <ul>
                    <li>Personnel</li>
                    <li>Customers</li>
                    <li>Communication</li>
                </ul>

                <h5 class="mt-10">E. Resilience at work</h5>
                <ul>
                    <li>Are you resilient – Take the test</li>
                    <li>The seven components of resilience</li>
                    <li>Resilience at work and at home</li>
                </ul>

                <h5 class="mt-10">F. Design and implement your 90 days Business Continuity Plan</h5>
                <ul>
                    <li>Design your plan</li>
                    <li>Organization details</li>
                    <li>Key response team – Contacts and roles</li>
                    <li>External contact details</li>
                    <li>Team procedures</li>
                </ul>

                <h5 class="mt-10">G. Communicate your plan</h5>
                <ul>
                    <li>Share the plan</li>
                    <li>Internal communication</li>
                    <li>External communication</li>
                </ul>

                <h5 class="mt-10">11 Steps the business needs to prepare for and actions you need to take NOW …</h5>
                <ul>
                    <li>Step 1 … Communicate …</li>
                    <li>Step 2 … Be Positive …</li>
                    <li>Step 3 … Know the Cycles …</li>
                    <li>Step 4 … Change …</li>
                    <li>Step 5 … Cut Back …</li>
                    <li>Step 6 … Extend Credit …</li>
                    <li>Step 7 … Staffing Changes</li>
                    <li>Step 8 … Plan Work from Home …</li>
                    <li>Step 9 … Online or Deliveries …</li>
                    <li>Step 10 … Market and Sell …</li>
                    <li>Step 11 … Repeat Business …</li>
                </ul>

            </div>
        </div>
    </section>

    @include('frontend.forms.training')

</main>
@endsection

