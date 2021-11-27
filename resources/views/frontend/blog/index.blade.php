@extends('layouts.frontend')
@section('title', 'Blog')
@section('content')

<style type="text/css">
.faq .faq-list li li{
   padding: 0px !important;
}

</style>
<main id="main">
    <x-breadcrumb name="Blog" />

    <!-- ======= Blog Section ======= -->

    <section id="blog" class="blog">
        <div class="container">
        @if ($posts->count() > 0)
            <div class="row">

                <div class="col-lg-8 entries">

                @foreach ($posts as $post)
                    <article class="entry" data-aos="fade-up">

                        <div class="entry-img text-center">
                        <img src="{{ asset('img/cover-images/'.$post['cover_image']) ?? asset('img/no-image-available.png') }}" alt="{{ Str::title($post['title']) }}" class="img-fluid">
                        </div>

                        <h2 class="entry-title">
                        <a href="{{ route('blog.show', $post['slug']) }}">{{ Str::title($post['title']) }}</a>
                        </h2>

                        <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="{{ route('blog.show', $post['slug']) }}">{{ Str::title($post['user']['name']) }}</a></li>
                            <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="{{ route('blog.show', $post['slug']) }}"><time datetime="2020-01-01">{{ Carbon\Carbon::parse($post['created_at'], 'UTC')->isoFormat('MMMM Do YYYY') }}</time></a></li>
                            {{-- <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="#">12 Comments</a></li> --}}
                        </ul>
                        </div>

                        <div class="entry-content">
                        <p>{{ Str::words($post['excerpt'], '55') }}</p>
                        <div class="read-more">
                            <a href="{{ route('blog.show', $post['slug']) }}">Read More</a>
                        </div>
                        </div>

                    </article><!-- End blog entry -->
                    @endforeach

                    <div class="blog-pagination justify-content-center">
                        {{ $posts->links() }}
                    </div>

                </div><!-- End blog entries list -->

                <div class="col-lg-4">
                    @include('frontend.blog.partials.sidebar')
                </div><!-- End blog sidebar -->

            </div>
        @else
            <div class="text-center">
                <h1>Sorry! No Posts Found</h1>
                <a class="btn btn-primary"href="{{ route('frontend.index') }}">Home</a>
            </div>
        @endif

        </div>
    </section><!-- End Blog Section -->


</main>
@endsection

