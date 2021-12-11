@extends('layouts.admin')
@section('title', 'Training: Improve Your Business')
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
                        <h5>Training</h5>
                        <h6 class="sub-heading">This page displays a list of all participants who registered for the "Improve Your Business" training.</h6>
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
                    <div class="card-header">List of registered Improve Your Business participants</div>
                    <div class="card-body">
                        <table class="table m-0" id="basicExample">
                            <thead class="thead-inverse-light">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Business Name</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Phone Number</th>
                                    <th class="text-center">Training Year</th>
                                    <th>Expectation</th>
                                    <th>Date Created</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($trainings as $training)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ !empty($training['full_name']) ? $training['full_name'] : 'Unavailable'}}</td>
                                    <td>{{ !empty($training['business_name']) ? $training['business_name'] : 'Unavailable'}}</td>
                                    <td class="text-center font-weight-bold">{{ !empty($training['email']) ? $training['email'] : '-'}}</td>
                                    <td class="text-center font-weight-bold">{{ !empty($training['phone_number']) ? $training['phone_number'] : '-'}}</td>
                                    <td class="text-center font-weight-bold">{{ Carbon\Carbon::parse($training['created_at'], 'UTC')->isoFormat('YYYY') }}</td>
                                    <td>{{ !empty($training['expectation']) ? $training['expectation'] : '-'}}</td>
                                    <td>{{ Carbon\Carbon::parse($training['created_at'], 'UTC')->isoFormat('MMMM Do YYYY, h:mm:ssa') }}</td>
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
