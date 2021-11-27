@extends('layouts.frontend')
@section('title', $title)
@section('content')

<style type="text/css">
.faq .faq-list li li{
   padding: 0px !important;
}

</style>
<main id="main">
    <x-breadcrumb name="Blog: Tag" />

    <!-- ======= Blog Section ======= -->

    <section id="blog" class="blog">
        @if (Route::currentRouteNamed('blog.filter_by_tag'))
            <div class="section-title">
                <h2>{{ Str::title($title) }}</h2>
            </div>
        @endif

        <div class="container">
        @if ($posts->count() > 0)
            <div class="row">
                <div class="col-lg-8 entries">
                    @foreach ($posts as $subPosts)
                        @foreach ( $subPosts['posts'] as $post)
                            @include('frontend.blog.filter._body')
                        @endforeach
                    @endforeach
                </div><!-- End blog entries list -->

                <div class="col-lg-4">
                    @include('frontend.blog.partials.sidebar')
                </div><!-- End blog sidebar -->

            </div>
        @else
            <div class="text-center">
                <h1>Sorry! No Posts Found</h1>
                <a class="btn btn-primary"href="{{ route('blog.index') }}">Back to Blog</a>
            </div>
        @endif

        </div>
    </section><!-- End Blog Section -->


</main>
@endsection

