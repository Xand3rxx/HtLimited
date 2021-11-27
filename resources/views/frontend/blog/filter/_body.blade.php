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
    </ul>
    </div>

    <div class="entry-content">
    <p>{{ Str::words($post['excerpt'], '55') }}</p>
    <div class="read-more">
        <a href="{{ route('blog.show', $post['slug']) }}">Read More</a>
    </div>
    </div>

</article><!-- End blog entry -->
