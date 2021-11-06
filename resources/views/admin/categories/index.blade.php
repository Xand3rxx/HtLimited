@extends('layouts.admin')
@section('title', 'Product Category')
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
                        <h5>Category</h5>
                        <h6 class="sub-heading">This page displays a list of all Categories</h6>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <!-- END: .main-heading -->
    <!-- BEGIN .main-content -->
    <div class="main-content">
        <div class="row gutters col-12 justify-content-end">
            <div class="card">
                <a href="#addCategory" class="btn btn-sm btn-primary  float-right" data-toggle="modal"><i class="icon-plus"></i> Create New Category</a>
            </div>
        </div>

        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">List of all Categories</div>
                    <div class="card-body">
                        <table class="table m-0" id="basicExample">
                            <thead class="thead-inverse-light">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Created By</th>
                                    <th class="text-center">Posts</th>
                                    <th class="text-center">Status</th>
                                    <th>Date Created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ !empty($category['name']) ? $category['name'] : 'Unavailable'}}</td>
                                    <td class="font-weight-bold">{{ $category['user']['name'] ?? 'Unavailable' }}</td>
                                    <td class="text-center font-weight-bold">{{ !empty($category['posts_count']) ? number_format($category['posts_count']) : 0}}</td>
                                    <td class="font-weight-bold text-center text-{{ ($category["deleted_at"] == "") ? 'success' : 'danger' }}">{{ ($category['deleted_at'] == "") ? 'Active' : 'Inactive' }}</td>
                                    <td>{{ Carbon\Carbon::parse($category['created_at'], 'UTC')->isoFormat('MMMM Do YYYY, h:mm:ssa') }}</td>
                                    <td>
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-xs btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Options
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                @if($category['slug'] !== 'uncategorized')
                                                    <a href="#editCategory" id="edit-category" data-toggle="modal"  class="dropdown-item text-warning" data-url="{{ route('admin.categories.edit', $category['uuid']) }}" title="Edit {{ $category['name']}} category"><span class="icon-edit"></span> Edit</a>
                                                @endif

                                                @if(!empty($category['user']['deleted_at']))
                                                    <a class="dropdown-item text-success" data-url="{{ route('admin.categories.reinstate', $category['uuid']) }}" title="Reinstate {{ $category['name']}} category"><span class="icon-undo"></span> Reinstate</a>
                                                @else
                                                    @if($category['slug'] !== 'uncategorized')
                                                        <a class="dropdown-item text-danger delete-entity" data-url="{{ route('admin.categories.deactivate', $category['uuid']) }}" title="Deactivate {{ $category['name']}} category"><span class="icon-bin"></span> Delete</a>
                                                    @endif
                                                @endif
                                            </div>
                                        </div>
                                    </td>
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
@include('admin.categories._modals')

@push('scripts')
  <script src="{{ asset('assets/js/253d5420-ccbe-4671-89f8-956cd70c42bc.js') }}"></script>
@endpush

@endsection
