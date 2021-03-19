@extends('master')

@section('content')
<section>
    <div class="row">
        <div class="col-md-8">
            <article class="blog-post">
                <div class="blog-post-image">
                    <a href="#"><img src="/storage/{{$post->featured_image}}" alt="{{$post->title}}"></a>
                </div>
                <div class="blog-post-body">
                    <h2><a href="#">{{$post->title}}</a></h2>
                    <div class="post-meta"><span>by <a href="#">{{$post->user->name}}</a></span>/<span><i class="fa fa-clock-o"></i>{{$post->created_at->format('M d Y')}}</span>/<span><i class="fa fa-comment-o"></i> <a href="#"></a></span></div>
                    <div class="blog-post-text">
                        {!! $post->content !!}
                    </div>
                </div>
            </article>
        </div>
        <div class="col-md-4 sidebar-gutter">
            @include('related_posts')
            @include('partials.sidebar')
        </div>
    </div>
</section>


@endsection
