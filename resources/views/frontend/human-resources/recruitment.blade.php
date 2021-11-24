@extends('layouts.frontend')
@section('title', 'Recruitment')
@section('content')

<main id="main">
    <x-breadcrumb name="Recruitment" />

    <section id="features" class="features">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="section-title">
                <h2>Recruitment</h2>
                <p>Matching clients to right employee</p>
            </div>
            <div class="container">
                <p>HT-Limited renders corporate personnel replacement services designed to bring job seekers to prospective employers by identifying their needs and locating the right personnel.</p>
                <h5 class="mt-10">Challenge</h5>
                <p>Recruiting staff is a very costly exercise. It is also an essential part of any business and it pays to do it properly. When organizations choose the right people for the job, train them well and treat them appropriately, these people not only produce good results but also tend to stay with the organization longer. In such circumstances, the organization’s initial and ongoing investment in them is well rewarded. An organization may have all of the latest technology and the best physical resources, but if it does not have the right people it will struggle to achieve the results it requires.</p>

                <h5 class="mt-10">Benefits</h5>


                <h5 class="mt-10">Save Resources</h5>
                <p>Our detailed information helps you quickly identify the best candidates without wasting time and money on unqualified prospects.</p>
                <div class="col-lg-4 col-md-6 text-center">
                    <img src="{{ asset('assets/frontend/img/others/save-resources.png') }}" class="img-fluid" alt="">
                </div>

                <h5 class="mt-10">Temporary Staff</h5>
                <p>We provide staff to companies that need to fill positions on temporary basis. Our charges are hourly or daily based on our client’s needs.</p>

                <h5 class="mt-10">Outsourcing Manpower</h5>
                <p>We take the work load off Human Resources Departments by running Outsourcing and Manpower Services for different categories of staff.</p>
                <div class="col-lg-4 col-md-6 text-center">
                    <img src="{{ asset('assets/frontend/img/others/outsource-manpower.png') }}" class="img-fluid" alt="">
                </div>

                <h5 class="mt-10">Job Hunting</h5>
                <p>Using our extensive network we actively search for suitable applicants to suit the specific needs of our clients getting the right people for the job.</p>

                <h5 class="mt-10">Recruitment Process</h5>
                <p>We do the complete recruitment process of interviewing applicants and providing skilled appraisal of their skills.</p>

                <h5 class="mt-10">Regular Review</h5>
                <p>Reviewing from time to time our files for qualified candidates to fill jobs that are listed with the Company.<p>

                <h5 class="mt-10">Who we recruit</h5>
                <p>We recruit different categories of staff from entry to CEO level. Areas in which we recruit include; Administration, Marketing, ICT, Accounting, Human Resources, Construction, Quality Control, Law, Customer Care, Logistics, Procurement and Purchasing, Medicine and Education. We also recruit for the Hospitality Industry. Drivers, Secretaries are outsourced to us.<p>

                <p>We recruit different levels of staff in Administration, Marketing, Accounting, Human Resources, Engineering, Property/Estate Management, Quality Control, Law, Customer Care, Logistics, Procurement and Purchasing, Medicine and Education. We also offer outsourcing services for, Drivers, Secretaries, Administrative Assistants.<p>
            </div>
        </div>
    </section>
</main>
@endsection

