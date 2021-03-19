<aside>

    <!-- sidebar-widget -->
    <div class="sidebar-widget">
        <h3 class="sidebar-title">Related Posts</h3>
        <div class="widget-container">
            @foreach ($related_posts as $post)
            <article class="widget-post">
                <div class="post-image">
                    <a href="/post/{{$post->slug}}"><img src="/storage/{{$post->featured_image}}" alt="{{$post->title}}" width="80" height="150"></a>
                </div>
                <div class="post-body">
                    <h2><a href="/post/{{$post->slug}}">{{$post->title}}</a></h2>
                    <div class="post-meta">
                        <span><i class="fa fa-clock-o"></i> {{$post->created_at->format('M d Y')}}</span> <span><a href="/post/{{$post->slug}}"><i class="fa fa-comment-o"></i> </a></span>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
    </div>

</aside>
