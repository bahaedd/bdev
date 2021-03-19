@forelse ($posts as $post)
            <article class="blog-post">
                <div class="blog-post-image">
                    <a href="/post/{{$post->slug}}"><img src="/storage/{{$post->featured_image}}" alt="{{$post->title}}" width="900" height="600"></a>
                </div>
                <div class="blog-post-body">
                    <h2><a href="/post/{{$post->slug}}">{{$post->title}}</a></h2>
                    <div class="post-meta"><span>by <a href="#">{{$post->user->name}}</a></span>/<span><i class="fa fa-clock-o"></i>{{$post->created_at->format('M d Y')}}</span>/<span><i class="fa fa-comment-o"></i> <a href="/post/{{$post->slug}}"></a></span></div>
                    <p>{{ \Illuminate\Support\Str::limit(strip_tags($post->content), 200, '...') }}.</p>
                    <div class="read-more"><a href="/post/{{$post->slug}}">Continue Reading</a></div>
                </div>
            </article>

            @empty
                <p>nothing to show !</p>
@endforelse

<ul class="pagination justify-content-center mb-4 text-center" style="margin-left: 310px">
    {{$posts->links()}}
</ul>
