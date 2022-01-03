@extends('layouts.frontend')
@section('title', 'Business Loans')
@section('content')

<main id="main">
    <x-breadcrumb name="Business Loans" />

    <section id="features" class="features">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="section-title">
                <h2>Business Loan</h2>
                <p>Providing Financial Aid</p>
            </div>
            <div class="container">
                <p>We ensure our clients get the needed financial support they need to get from the initial plan stage to project execution.</p>

                <h5 class="mt-10">Affiliates</h5>
                <p>HT – Limited, a Business Development Service (BDS) Provider, has taken another giant stride to ensure that businesses get the much needed financial support to get them off the ground. <span style="color: blue; font-weight: bold;">US</span><span style="color: red; font-weight: bold;">AID</span> | <span style="color: blue; font-weight: bold;">NIGERIA</span> and <span style="color: green; font-weight: bold;">Bank of Industry Loans</span> are available to businesses in need of support.</p>

                <p>To access these loans, the business needs to meet certain criteria. At HT-Limited, we ensure you will!</p>

                <p>
                    <a href="{{ route('frontend.business_development_bank_of_industry_loan') }}" target="_blank">Bank of Industry</a>
                    <br>
                    <a href="{{ route('frontend.business_development_bank_of_industry_loan') }}" target="_blank">USAID | NIGERIA</a>
                </p>
            </div>
        </div>
    </section>
</main>
@endsection

