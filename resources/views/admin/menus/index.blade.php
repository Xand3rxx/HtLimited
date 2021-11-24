@extends('layouts.admin')
@section('title', 'All Posts')
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
                        <h5>Menu</h5>
                        <h6 class="sub-heading">This page allows you to manage the website menu</h6>
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
                    <div class="card-header">Website Menu</div>
                    <div class="card-body">
                        {!! Menu::render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@push('scripts')
    {!! Menu::scripts() !!}
@endpush

@endsection
