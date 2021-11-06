@extends('layouts.admin')
@section('title', $post['title'])
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
                        <h5>Blog Post Preview</h5>
                        <h6 class="sub-heading">This is a preview page for a blog post.</h6>
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
                    <div class="card-header">Post Information</div>
                    <div class="card-body">

                        <table class="table table-sm mg-b-0">
                            <tbody>
                                <tr>
                                    <td class="font-weight-bold" width="25%">Excerpt</td>
                                    <td class="tx-color-03" width="75%">{{ !empty($post['excerpt']) ? Str::title($post['excerpt']) : 'No description' }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold" width="25%">Category</td>
                                    <td class="tx-color-03" width="75%">{{ !empty($post['category']['name']) ? Str::title($post['category']['name']) : '-' }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold" width="25%">Tags</td>
                                    <td class="tx-color-03" width="75%">
                                        @foreach($post['tags'] as $tag)
                                        {{ !empty($tag['name']) ? Str::title($tag['name']) : 'Unavailable' }}{{ !$loop->last ? ", " : "" }}
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold" width="25%">Date Joined</td>
                                    <td class="tx-color-03" width="75%">{{ Carbon\Carbon::parse($post['created_at'])->isoFormat('MMMM Do YYYY, hh:mm:ssa') }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold" width="25%">Cover Image</td>
                                    <td><img src="{{ asset('img/cover-images/'.$post['cover_image']) ?? asset('img/no-image-available.png') }}" width="100px" height="80px"></td>
                                </tr>
                            </tbody>
                        </table>
                        <h4 class="card-title text-center">{{ !empty($post['title']) ? Str::title($post['title']) : 'Unavailable' }}</h4>
                    </div>
                    <div class="card-body">
                        {!! $post['lb_content'] !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

