@extends('layouts.frontend')
@section('title', $title))
@section('content')

<style type="text/css">
.faq .faq-list li li{
   padding: 0px !important;
}

</style>
<main id="main">
    <x-breadcrumb name="Blog: Category" />

    <!-- ======= Blog Section ======= -->

    <section id="blog" class="blog">
        @if (Route::currentRouteNamed('blog.search'))
            <div class="section-title">
                <h2>{{ Str::title($title) }}</h2>
            </div>
        @endif

        <div class="container">
        @if ($posts->count() > 0)
            <div class="row">
                <div class="col-lg-8 entries">
                    @foreach ( $posts as $post)
                        <article class="entry" data-aos="fade-up">
                            <div class="entry-img text-center">
                                <img src="{{ asset('img/cover-images/'.$post['contentable']['cover_image']) ?? asset('img/no-image-available.png') }}" alt="{{ Str::title($post['contentable']['title']) }}" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                            <a href="{{ route('blog.show', $post['contentable']['slug']) }}">{{ Str::title($post['contentable']['title']) }}</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="{{ route('blog.show', $post['contentable']['slug']) }}">{{ Str::title($post['contentable']['user']['name']) }}</a></li>
                                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="{{ route('blog.show', $post['contentable']['slug']) }}"><time datetime="2020-01-01">{{ Carbon\Carbon::parse($post['contentable']['created_at'], 'UTC')->isoFormat('MMMM Do YYYY') }}</time></a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>{{ Str::words($post['contentable']['excerpt'], '55') }}</p>
                                <div class="read-more">
                                    <a href="{{ route('blog.show', $post['contentable']['slug']) }}">Read More</a>
                                </div>
                            </div>

                        </article><!-- End blog entry -->


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

