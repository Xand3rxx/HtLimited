@extends('layouts.admin')
@section('title', 'Dashboard')
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
                        <h5>Dashboard</h5>
                        <h6 class="sub-heading">This page displays the summary of your website.</h6>
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
                    {{-- <div class="card-header">Header &amp; Footer</div> --}}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <h4 class="card-title">Welcome {{ !empty($administratorName) ? $administratorName : 'Unavailable' }}!</h4>
                                <p class="card-text">We’ve assembled some links to get you started:</p>
                                <a href="{{ route('admin.settings.index') }}" class="btn btn-primary">Customize your website</a><br>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                <h4>Next Step</h4>
                                <p class="card-text"> <i class="icon-layers"></i> <a class="text-primary" href="{{ route('admin.categories.index') }}">Create category</a></p>

                                <p class="card-text"> <i class="icon-link"></i> <a class="text-primary" href="{{ route('admin.tags.create') }}">Create tag</a></p>

                                <p class="card-text"> <i class="icon-pencil"></i> <a class="text-primary" href="{{ route('admin.posts.create') }}">Create post</a></p>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                <h4>More Actions</h4>
                                <p class="card-text"> <i class="icon-file-text"></i> <a class="text-primary" href="{{ route('admin.posts.index') }}">Posts</a></p>

                                <p class="card-text"> <i class="icon-profile"></i> <a class="text-primary" href="{{ route('admin.profile.index') }}">Manage profile</a></p>

                                <p class="card-text"> <i class="icon-home"></i> <a class="text-primary" href="{{ route('frontend.index') }}" target="_blank">Back to website</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row gutters">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                <div class="info-stats4">
                    <div class="icon-type pull-left">
                        <i class="icon-chat2"></i>
                    </div>
                    <div class="sale-num">
                        <h4>{{ !empty($posts['total']) ?number_format($posts['total']) : 0 }}</h4>
                        <p>Blog Posts</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                <div class="info-stats4">
                    <div class="icon-type pull-left">
                        <i class="icon-assignment_turned_in"></i>
                    </div>
                    <div class="sale-num">
                        <h4>{{ !empty($posts['totalActivePosts']) ? number_format($posts['totalActivePosts']) : 0 }}</h4>
                        <p>Active posts</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                <div class="info-stats4">
                    <div class="icon-type pull-left">
                        <i class="icon-drawer"></i>
                    </div>
                    <div class="sale-num">
                        <h4>{{ !empty($posts['drafts']) ? number_format($posts['drafts']) : 0 }}</h4>
                        <p>Drafts</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">Recent Posts</div>
                    <div class="card-body">
                        <ul class="team-activity">
                            @foreach ($latestPosts as $post)
                                <li>
                                    <span class="text-muted">{{ Carbon\Carbon::parse($post['created_at'], 'UTC')->isoFormat('MMMM Do YYYY, h:mm:ssa') }}</span> | <a href="{{ route('admin.posts.show', $post['uuid']) }}"><span class="text-primary">{{ !empty($post['title']) ? Str::title($post['title']) : 'Unavailable' }}</span></a>
                                </li>
                                <hr>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
