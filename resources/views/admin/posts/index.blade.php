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
                        <h5>Blog Posts</h5>
                        <h6 class="sub-heading">This page displays a list of all Blog Posts</h6>
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
                    <div class="card-header">List of all Categories</div>
                    <div class="card-body">
                        <table class="table m-0" id="basicExample">
                            <thead class="thead-inverse-light">
                                <tr>
                                    <th>#</th>
                                    <th class="text-center">Image</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Category</th>
                                    <th class="text-center">Status</th>
                                    <th>Date Created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td><img src="{{ asset('img/cover-images/'.$post['cover_image']) ?? asset('img/no-image-available.png') }}" width="100px" height="80px"></td>
                                    <td class="font-weight-bold">{{ !empty($post['title']) ? $post['title'] : 'Unavailable'}}</td>
                                    <td>{{ $post['user']['name'] ?? 'Unavailable' }}</td>
                                    <td>{{ !empty($post['category']['name']) ? $post['category']['name'] : '-'}}</td>
                                    <td class="font-weight-bold text-center text-{{ ($post["status"] == "active") ? 'success' : 'danger' }}">{{ ($post['status'] == "active") ? 'Published' : 'Draft' }}</td>
                                    <td>{{ Carbon\Carbon::parse($post['created_at'], 'UTC')->isoFormat('MMMM Do YYYY, h:mm:ssa') }}</td>
                                    {{-- <td>{{ $post['created_at']->toFormattedDateString() }}</td> --}}
                                    <td>
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-xs btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Options
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="{{ route('admin.posts.show', $post['uuid']) }}" class="dropdown-item text-info" title="Preview {{ $post['title']}} post"><span class="icon-file-text2"></span> Preview</a>

                                                <a href="{{ route('admin.posts.edit', $post['uuid']) }}" id="edit-post" class="dropdown-item text-warning" title="Edit {{ $post['title']}} post"><span class="icon-edit"></span> Edit</a>

                                                @if($post['status'] == 'inactive')
                                                    <a class="dropdown-item text-success" href="{{ route('admin.posts.publish', $post['uuid']) }}" title="Publish {{ $post['title']}} post"><span class="icon-checkmark"></span> Publish</a>
                                                @else
                                                    <a class="dropdown-item text-warning" href="{{ route('admin.posts.unpublish', $post['uuid']) }}" title="Unpublish {{ $post['title']}} post"><span class="icon-warning"></span> Unpublish</a>
                                                @endif

                                                <a class="dropdown-item text-danger delete-entity" data-url="{{ route('admin.posts.delete_post', $post['uuid']) }}" title="Delete {{ $post['title']}} post"><span class="icon-bin"></span> Delete</a>

                                                {{-- <form method="post" action="{{ route('admin.posts.destroy', $post['uuid']) }}">
                                                    @csrf @method('DELETE')
                                                    <button type="submit" class="dropdown-item text-danger delete-entit" title="Delete {{ $post['title']}} post"><span class="icon-bin"></span> Delete</button>
                                                </form> --}}
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
@endsection
