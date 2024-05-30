@extends('layouts.frontend')
@section('title', 'Outsourcing')
@section('content')

<main id="main">
    <x-breadcrumb name="Outsourcing" />
    <x-hero-section image="/assets/frontend/img/slide/slide-3.jpg" title="Outsourced Services" sub-title="Effectively Managing your Needs" />

    <section id="features" class="features">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            {{-- <div class="section-title">
                <h2>Outsourced Services</h2>
                <p>Effectively Managing your Needs</p>
            </div> --}}
            <div class="container">
                <p>HT-Limited offers outsource services to clients by enabling the to shift certain business responsibilities to an outside source enabling them to focus on core business functions.</p>
                <p>By outsourcing their HR functions, companies can:</p>
                <ul>
                    <li>Save huge amounts of money and be free of complications that are otherwise involved in maintaining an internal HR department. With this, companies can concentrate on their core competencies, saving valuable time and resources.</li>
                    <li>Outsourcing helps companies make use of available labor and infrastructure facilities available in other companies, which in turn cuts down on manpower costs, operational costs, and capital expenditure.</li>
                    <li>Concentrate on Core Business: The back office operations of an organization are highly tedious and need specialized attention. Most of them are critical for the organization's progress. By outsourcing their back office operations, businesses can concentrate on their core competencies while their back office operations are managed smoothly by a specialized third-party company.</li>
                    <li>Skilled manpower at lower rates: Outsourcing gives an organization the chance to get access to skilled and trained manpower at extremely low rates, which will lead to an increase in productivity and save costs in a major way.</li>
                </ul>
                {{-- <h5 class="mt-10">Outsource Services</h5>
                <p>The primary objective of our outsourced services solution is to offer professional help not only to provide a transparent, effective way to manage your people needs, but also to ‘free’ you up to focus on growing your business and improving your core functions.</p>

                <p>We will work with you to give your business a competitive advantage through quality HR processes and services. Working with you, we can provide a practical cost-effective service, tailored to the size and requirements of your business.</p>

                <h6>Outsourced Payroll Management Services</h6>
                <ul>
                    <li>Compensation computation & management</li>
                    <li>Tax management through P.A.Y.E.</li>
                    <li>Benefits Management (Pension Fund and Insurance)</li>
                    <li>Salary Remittances</li>
                    <li>Employee Compensation Help Desk</li>
                </ul>

                <h6>Outsourced HR Admin Services</h6>
                <ul>
                    <li>Statutory Compliance</li>
                    <li>Employee Welfare</li>
                    <li>Leave Adminstration</li>
                    <li>Employee Records</li>
                </ul> --}}
            </div>
        </div>
    </section>
</main>
@endsection

