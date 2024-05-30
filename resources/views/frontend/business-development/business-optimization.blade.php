@extends('layouts.frontend')
@section('title', 'Business Optimization')
@section('content')

<main id="main">
    <x-breadcrumb name="Business Optimization" />

    <section id="features" class="features">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="section-title">
                <h2>Business Optimization</h2>
                {{-- <p>Effectively Managing your Needs</p> --}}
            </div>

            <div class="container">
                <p>HR Function Management: We help MSMEs streamline their HR processes with services like Job Functions
                    and Specifications Audit, HRIS implementation, Compensation Management, Performance Management
                    Systems, Company/Employee Manual development, and more.</p>

                <p>MSME Mentoring Programme: We guide MSMEs in articulating and reviewing their strategies, followed by
                    action planning sessions to drive growth.</p>

                <p>MSME Training Programmes: We offer targeted training for MSME owners and staff, covering essential
                    skills like Business Plan writing, Strategic Management, Bookkeeping, Accounting, Customer Service,
                    Marketing, Operations Management, Process Auditing, and Ethics.</p>

                <p>Our goal is to equip MSMEs with the expertise and tools necessary to succeed and contribute to
                    Nigeria's economic growth.</p>
            </div>
            {{-- <div class="container">
                <p>We have access to limitless resources in providing the necessary support for the growth and
                    development of businesses in Nigeria; hence our offerings in the following areas:</p>
                <ul>
                    <li>Managing the HR Function.</li>
                    <li>Job Functions and Specifications Audit.</li>
                    <li>Human Resource Information System (HRIS).</li>
                    <li>Compensation Management.</li>
                    <li>Performance Management Systems Document.</li>
                    <li>Company/Employee Manual and other HR functions as the need may arise.</li>

                </ul>

                <h6>We also do:</h6>
                <ul>
                    <li>Business Development Programme.</li>
                    <li>Performance Management Systems Document.</li>
                    <li>Strategy articulation/review and action planning sessions.</li>
                    <li>Business Plan writing and Strategic Management.</li>
                    <li>Finance.</li>
                    <li>Marketing.</li>
                    <li>Operations Management.</li>
                    <li>Process Auditing and Ethics.</li>
                </ul>
            </div> --}}
        </div>
    </section>
</main>
@endsection
