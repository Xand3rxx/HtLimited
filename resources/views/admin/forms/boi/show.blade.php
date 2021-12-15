@extends('layouts.admin')
@section('title', 'BOI Loan Details')
@section('content')

<!-- BEGIN .app-main -->
<div class="app-main">
    <header class="main-heading">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                    <div class="page-icon">
                        <i class="icon-equalizer2"></i>
                    </div>
                    <div class="page-title">
                        <h5>Blog Loan Details</h5>
                        <h6 class="sub-heading">This page allows you to see the details of of a BOI loan request.</h6>
                    </div>
                </div>

            </div>
        </div>
    </header>

    <!-- END: .main-heading -->

    <div class="main-content">
        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">BOI Loan request of {{ !empty($boi['form_data']['surname']) ? Str::title($boi['form_data']['surname'].' '.$boi['form_data']['first_name']) : 'Unavailable'}}</div>
                    <div class="card-body">

                        <h4 class="card-title text-center">Personal Information</h4>
                        <table class="table table-sm mg-b-0">
                            <tbody>
                                <tr>
                                    <td class="font-weight-bold" width="35%">Name</td>
                                    <td class="tx-color-03" width="65%">{{ !empty($boi['form_data']['surname']) ? Str::title($boi['form_data']['surname'].' '.$boi['form_data']['first_name']) : 'Unavailable'}}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold" width="35%">Email</td>
                                    <td class="tx-color-03" width="65%">{{ !empty($boi['email']) ? $boi['email'] : '-' }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold" width="35%">Phone Number</td>
                                    <td class="tx-color-03" width="65%">{{ !empty($boi['form_data']['phone_number']) ? $boi['form_data']['phone_number'] : '-' }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold" width="35%">Alternative Phone Number</td>
                                    <td class="tx-color-03" width="65%">{{ !empty($boi['form_data']['alternative_phone_number']) ? $boi['form_data']['alternative_phone_number'] : '-' }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold" width="35%">State of Residence</td>
                                    <td class="tx-color-03" width="65%">{{ !empty($boi['form_data']['state']) ? $boi['form_data']['state'] : '-' }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold" width="35%">L.G.A of Residence</td>
                                    <td class="tx-color-03" width="65%">{{ !empty($boi['form_data']['lga']) ? $boi['form_data']['lga'] : '-' }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold" width="35%">Type of Loan</td>
                                    <td class="tx-color-03" width="65%">{{ !empty($boi['form_data']['loan_type']) ? $boi['form_data']['loan_type'] : '-' }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold" width="35%">Residential Address</td>
                                    <td class="tx-color-03" width="65%">{{ !empty($boi['form_data']['residential_address']) ? $boi['form_data']['residential_address'] : '-' }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold" width="35%">Loan Request Date</td>
                                    <td class="tx-color-03" width="65%">{{ Carbon\Carbon::parse($boi['created_at'])->isoFormat('MMMM Do YYYY, hh:mm:ssa') }}</td>
                                </tr>
                            </tbody>
                        </table>

                        <h4 class="card-title text-center mt-10">Business Information</h4>
                        <table class="table table-sm mg-b-0">
                            <tbody>
                                <tr>
                                    <td class="font-weight-bold" width="35%">Business Name</td>
                                    <td class="tx-color-03" width="65%">{{ !empty($boi['form_data']['business_name']) ? $boi['form_data']['business_name'] : 'Unavailable'}}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold" width="35%">Business Name Registration Status</td>
                                    <td class="tx-color-03" width="65%">{{ !empty($boi['form_data']['business_name_reg_status']) ? $boi['form_data']['business_name_reg_status'] : '-' }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold" width="35%">CAC Registration Number</td>
                                    <td class="tx-color-03" width="65%">{{ !empty($boi['form_data']['cac_reg_status']) ? $boi['form_data']['cac_reg_status'] : '-' }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold" width="35%">CAC Certificate</td>
                                    <td class="tx-color-03" width="65%">
                                        <a href="{{ url('storage/'.$boi['form_data']['cac_certificate']) }}" download class="btn btn-success"><i class="icon-download3"> </i> Download CAC Certificate </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold" width="35%">Official Email</td>
                                    <td class="tx-color-03" width="65%">{{ !empty($boi['form_data']['business_email']) ? $boi['form_data']['business_email'] : '-' }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold" width="35%">Official Phone Number</td>
                                    <td class="tx-color-03" width="65%">{{ !empty($boi['form_data']['official_phone_number']) ? $boi['form_data']['official_phone_number'] : '-' }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold" width="35%">Alternative Official Phone Number</td>
                                    <td class="tx-color-03" width="65%">{{ !empty($boi['form_data']['official_phone_number_2']) ? $boi['form_data']['official_phone_number_2'] : '-' }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold" width="35%">Industry Sector</td>
                                    <td class="tx-color-03" width="65%">{{ !empty($boi['form_data']['industry_sector']) ? $boi['form_data']['industry_sector'] : '-' }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold" width="35%">Products</td>
                                    <td class="tx-color-03" width="65%">{{ !empty($boi['form_data']['products']) ? $boi['form_data']['products'] : '-' }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold" width="35%">Equipment Used</td>
                                    <td class="tx-color-03" width="65%">{{ !empty($boi['form_data']['equipment_used']) ? $boi['form_data']['equipment_used'] : '-' }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold" width="35%">Years of Operation</td>
                                    <td class="tx-color-03" width="65%">{{ !empty($boi['form_data']['years_of_operation']) ? $boi['form_data']['years_of_operation'] : '-' }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold" width="35%">Staff Strength</td>
                                    <td class="tx-color-03" width="65%">{{ !empty($boi['form_data']['staff_strength']) ? $boi['form_data']['staff_strength'] : '-' }}</td>
                                </tr>
                            </tbody>
                        </table>

                        <h4 class="card-title text-center mt-10">Loan Request Details</h4>
                        <table class="table table-sm mg-b-0">
                            <tbody>
                                <tr>
                                    <td class="font-weight-bold" width="35%">Loan Sum</td>
                                    <td class="tx-color-03" width="65%">₦{{ !empty($boi['form_data']['loan_sum']) ? number_format($boi['form_data']['loan_sum'] ): '-' }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold" width="35%">Purpose of Loan</td>
                                    <td class="tx-color-03" width="65%">{{ !empty($boi['form_data']['purpose_of_loan']) ? $boi['form_data']['purpose_of_loan'] : '-' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

