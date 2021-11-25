@extends('layouts.frontend')
@section('title', 'Bank of Industry Loan Requirements')
@section('content')

<main id="main">
    <x-breadcrumb name="Bank of Industry Loan Requirements" />

    <section id="features" class="features">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="section-title">
                <h2>Bank of Industry Loan Requirements</h2>
            </div>
            <div class="container">
                <h4 class="mt-10 mb-5">SECTION A – GENERAL INFORMATION</h4>

                <div class="text-center">
                    <img src="{{ asset('assets/frontend/img/others/we-can-also-help-facilitate-your-loan-application.png') }}" alt="Facilitate loan" width="50%" class="img-fluid">
                </div>

                <h5 class="mt-5">Who Can Bank of Industry Assist?</h5>
                <ul>
                    <li>Small, medium and large enterprises, excluding cottage industries.</li>
                    <li>New or existing companies, seeking expansion, modernization or diversification.</li>
                    <li>Credit worthy promoters who will be required to prove their commitment to the project by contributing at least 25% of the project cost excluding land.</li>
                    <li>Borrowers whose management capability, financial situation (including availability of collateral and guarantee), character and reputation are incontrovertible.</li>
                    <li>Clients with demonstrable ability to meet loan repayments.</li>
                    <li>Borrowers with no record of unpaid loans to erstwhile development finance institutions and other banks.</li>
                </ul>

                <h5>Criteria Business Need To Meet To Access Loans</h5>
                <ul>
                    <li>Formal letter of application.</li>
                    <li>Photocopy of certificate of registration or incorporation of the certified true copies of forms C02 and C07.</li>
                    <li>A photocopy of the certified true copy of memorandum and articles of association of the company.</li>
                    <li>Feasibility study report (4 copies).</li>
                </ul>

                <h6>Fee as stated on the Bank of Industry Website:</h6>
                <p><a href="https://www.boi.ng/smeconsultants/" target="_blank">https://www.boi.ng/smeconsultants/</a></p>

                <h5>Consideration for industries that meet the following requirement</h5>
                <ol>
                    <li>Capacity to substantially add to industrial output.</li>
                    <li>Projects that use largely domestic raw materials.</li>
                    <li>Industry in which Nigeria’s comparative advantages could be converted to competitive ones.</li>
                    <li>Ability to promote the expansion of exports through the production of high quality products that are attractive to domestic and export markets.</li>
                    <li>Niche projects that produce for worldwide consumption.</li>
                    <li>Projects that create both forward and backwards linkages, with the rest of the domestic or regional economy.</li>
                    <li>Ventures that promote inter-state or regional integration.</li>
                    <li>Small and medium enterprises (SMEs) that have linkage with large firms, belong to clusters and operate under franchise.</li>
                    <li>Enterprises with high employment generation capacity.</li>
                    <li>The project must be technically feasible, commercially viable and economically desirable.</li>
                    <li>Projects that are environmentally friendly.</li>
                    <li>Enterprises that have good management set-up and proper accounting procedures.</li>
                    <li>Enterprises promoted by women entrepreneurs.</li>
                </ol>

                <h5>Industry sub-sectors given priority for project selection</h5>
                <ol>
                    <li>Agro-industries, textile and leather.</li>
                    <li>Polymer–based industries.</li>
                    <li>Solid minerals.</li>
                    <li>Foundries.</li>
                    <li>Niche projects that produce for worldwide consumption.</li>
                    <li>Information communication technology (ICT) services.</li>
                </ol>

                <h5>Criterias a business needs to access loans</h5>
                <ol>
                    <li>Formal letter of Application.</li>
                    <li>Photocopy of Certificate of Registration or Incorporation of the Certified True Copies of Forms C02 and C07.</li>
                    <li>A photocopy of the Certified True Copy of Memorandum and Articles of Association of the Company.</li>
                    <li>Feasibility Study Report (4 copies).</li>
                    <li>Quotations for items of equipment (at least 2 or 3 quotations from different sources), where applicable.</li>
                    <li>Three (3) years most recent Audited Accounts of the company (for existing company).</li>
                    <li>Organizational Structure and Management of the company.</li>
                    <li>Declaration of total outstanding liabilities of the company.</li>
                    <li>Statement of Account for the past six months from the company’s bankers.</li>
                    <li>
                        Acceptable Securities shall include a charge/security interest over all of applicant’s assets, copyrights, rights etc. and on the equipment/ assets financed and/or the under-listed securities among others:
                        <ul>
                            <li>Registered Intellectual Property/Proprietary Assets. Assignments of all agreements and Intellectual Property Rights (IPRs) to BOI. The Bank would have right in the negotiation of valuation of IPRs.</li>
                            <li>Joint and Several Guarantees of the Directors of applicant Company with Notarized Statement of Net worth.</li>
                            <li>Provision of Guarantee cover issued by any financial institution acceptable to the bank.</li>
                            <li>Insurance cover from any acceptable/reputable insurance company for short term lending of not more than one year.</li>
                            <li>Marketable financial instruments.</li>
                            <li>Assignment of receivables/lien on proceeds/deposits and the right of set-off</li>
                            <li>First hypothecation charge on all the tangible moveable assets under the project.</li>
                            <li>Ordinary producers would be required to bring in at least 25 per cent of the project cost as promoters’ contribution.</li>
                            <li>Producers would be required to tie up the advances from the Distributors to cover 35 per cent to 40 per cent of the budget.</li>
                            <li>A Trust and Retention Account (TRA) may be maintained for all capital as well as revenue inflows and outflows. Thus receivables on sale of all IPRs would be credited to TRA. The modalities of TRA would be worked out oncase-by-case basis to the satisfaction of the Bank, which will have first charge on the TRA.</li>
                            <li>Any other security that may be acceptable to the bank.</li>
                        </ul>
                    </li>
                    <li>Three (3) years most recent Tax Clearance Certificate for the Company and two (2) Directors.</li>
                    <li>Eight recent Passport photographs of each of the two Directors and the Company Secretary.</li>
                    <li>Completed copy of Bank of Industry Questionnaire.</li>
                </ol>

                <h4 class="mt-10">SECTION B – LIST OF INFORMATION EXPECTED IN THE BUSINESS PLAN</h4>
                <ol>
                    <li>Information on the company’s activities since incorporation.</li>
                    <li>Biographies of shareholders of the company and their percentage shareholding.</li>
                    <li>Projects concept, the need for the project and detail project description.</li>
                    <li>Details of the pre and post production cost as well as the proposed financing plan with realistic assessment and evidence of availability of funds from each source.</li>
                    <li>Details of existing assets and the value as well as cost incurred on the proposed project till date.</li>
                    <li>Detailed technical information covering technology, production process etc.</li>
                    <li>Information on Technical Partners, if any.</li>
                    <li>Details of utility requirements and availability of essential services such as water, power, transport around the project site.</li>
                    <li>Comprehensive list of manpower requirements broken down into categories and salaries.</li>
                    <li>Marketing of products and services including distribution arrangement.</li>
                    <li>List, qualification and position and annual salary of existing management and staff (for expansion projects only).</li>
                    <li>For on-going projects, give the existing, Expansion/Diversification and Consolidated projections covering Profit and Loss Accounts, Cash Flow Analysis and Balance Sheets for the period of five (5) years. Also provide the detailed information/data and assumptions used in the above projections</li>
                </ol>

            </div>
        </div>
    </section>

    @include('frontend.forms.boi-loan')

</main>
@endsection

