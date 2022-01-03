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
                        <p>Amount Spent</p>
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
