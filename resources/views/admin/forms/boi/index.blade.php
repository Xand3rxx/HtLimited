@extends('layouts.admin')
@section('title', 'Bank of Industry Loan')
@section('content')

<!-- BEGIN .app-main -->
<div class="app-main">
    <!-- BEGIN .main-heading -->
    <header class="main-heading">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                    <div class="page-icon">
                        <i class="icon-layers"></i>
                    </div>
                    <div class="page-title">
                        <h5>Bank of Industry Loan Requests</h5>
                        <h6 class="sub-heading">This page displays a list of all "Bank of Industry Loan" requests.</h6>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <!-- END: .main-heading -->
    <!-- BEGIN .main-content -->
    <div class="main-content">
        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">List of Bank of Industry Loan requesters</div>
                    <div class="card-body">
                        <table class="table m-0" id="basicExample">
                            <thead class="thead-inverse-light">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Type of Loan</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Phone Number</th>
                                    <th class="text-center">State of Residence</th>
                                    <th>Date Created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bois as $boi)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ !empty($boi['form_data']['surname']) ? $boi['form_data']['surname'].' '.$boi['form_data']['first_name'] : 'Unavailable'}}</td>
                                    <td>{{ !empty($boi['form_data']['loan_type']) ? $boi['form_data']['loan_type'] : 'Unavailable'}}</td>
                                    <td class="text-center font-weight-bold">{{ !empty($boi['email']) ? $boi['email'] : '-'}}</td>
                                    <td class="text-center font-weight-bold">{{ !empty($boi['form_data']['phone_number']) ? $boi['form_data']['phone_number'] : '-'}}</td>
                                    <td class="text-center">{{ !empty($boi['form_data']['state']) ? $boi['form_data']['state'] : '-'}}</td>
                                    <td>{{ Carbon\Carbon::parse($boi['created_at'], 'UTC')->isoFormat('MMMM Do YYYY, h:mm:ssa') }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: .main-content -->
</div>
<!-- END: .app-main -->

@endsection
