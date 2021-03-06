<div class="sidebar" data-aos="fade-left">

    <h3 class="sidebar-title">Search</h3>
    <div class="sidebar-item search-form">
    <form action="{{ route('blog.search') }}" method="POST">
        @csrf
        <input type="text" name="query">
        <button type="submit"><i class="icofont-search"></i></button>
    </form>

    </div><!-- End sidebar search formn-->


    <h3 class="sidebar-title">Categories</h3>
    <div class="sidebar-item categories">
    <ul>
        @foreach ($categories as $category)
            <li><a href="{{ route('blog.filter_by_category', $category['name']) }}">{{ $category['name'] }} <span>({{ number_format($category['posts_count']) }})</span></a></li>
        @endforeach
    </ul>

    </div><!-- End sidebar categories-->

    <h3 class="sidebar-title">Recent Posts</h3>
    <div class="sidebar-item recent-posts">
        @foreach ($recentPosts as $post)
            <div class="post-item clearfix">
                <img src="{{ asset('img/cover-images/'.$post['cover_image']) ?? asset('img/no-image-available.png') }}" alt="{{ Str::title($post['title']) }}">
                <h4><a href="{{ route('blog.show', $post['slug']) }}">{{ Str::title($post['title']) }}</a></h4>
                <time datetime="2020-01-01">{{ Carbon\Carbon::parse($post['created_at'], 'UTC')->isoFormat('MMMM Do YYYY') }}</time>
            </div>
        @endforeach
    </div><!-- End sidebar recent posts-->

    <h3 class="sidebar-title">Tags</h3>
    <div class="sidebar-item tags">
    <ul>
        @foreach ($tags as $tag)
            <li><a href="{{ route('blog.filter_by_tag', $tag['name']) }}">{{ $tag['name'] }}</a></li>
        @endforeach
    </ul>

    </div><!-- End sidebar tags-->

    </div>
        <script type="text/javascript"> google_ad_client = "ca-pub-8232357139186190"; google_ad_width = 400; google_ad_height = 90; google_ad_format = "728x90_as"; google_ad_type = "text_image"; google_color_border = "FFFFFF"; google_color_bg = "0000FF"; google_color_link = "FFFFFF"; google_color_text = "000000"; google_color_url = "008000"; </script> <script type="text/javascript" src="https://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
    </div>


</div><!-- End sidebar -->
