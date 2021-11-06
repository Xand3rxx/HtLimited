@extends('layouts.admin')
@section('title', 'Tag')
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
                        <h5>Tag</h5>
                        <h6 class="sub-heading">This page displays a list of all Tags</h6>
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
                <a href="#addCategory" class="btn btn-sm btn-primary  float-right" data-toggle="modal"><i class="icon-plus"></i> Create New Tag</a>
            </div>
        </div>

        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">List of all Tags</div>
                    <div class="card-body">
                        <table class="table m-0" id="basicExample">
                            <thead class="thead-inverse-light">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Created By</th>
                                    <th class="text-center">Status</th>
                                    <th>Date Created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tags as $tag)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ !empty($tag['name']) ? $tag['name'] : 'Unavailable'}}</td>
                                    <td class="font-weight-bold">{{ $tag['user']['name'] ?? 'Unavailable' }}</td>
                                    <td class="font-weight-bold text-center text-{{ ($tag["deleted_at"] == "") ? 'success' : 'danger' }}">{{ ($tag['deleted_at'] == "") ? 'Active' : 'Inactive' }}</td>
                                    <td>{{ Carbon\Carbon::parse($tag['created_at'], 'UTC')->isoFormat('MMMM Do YYYY, h:mm:ssa') }}</td>
                                    <td>
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-xs btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Options
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#editCategory" id="edit-category" data-toggle="modal"  class="dropdown-item text-warning" data-url="{{ route('admin.tags.edit', $tag['uuid']) }}" title="Edit {{ $tag['name']}} tag"><span class="icon-edit"></span> Edit</a>

                                                @if(!empty($tag['user']['deleted_at']))
                                                    <a class="dropdown-item text-success" data-url="{{ route('admin.tags.reinstate', $tag['uuid']) }}" title="Reinstate {{ $tag['name']}} tag"><span class="icon-undo"></span> Reinstate</a>
                                                @else
                                                    <a class="dropdown-item text-danger delete-entity" data-url="{{ route('admin.tags.deactivate', $tag['uuid']) }}" title="Deactivate {{ $tag['name']}} tag"><span class="icon-bin"></span> Delete</a>
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
@include('admin.tags._modals')

@push('scripts')
  <script src="{{ asset('assets/js/253d5420-ccbe-4671-89f8-956cd70c42bc.js') }}"></script>
@endpush

@endsection
