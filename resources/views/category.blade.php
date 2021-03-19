@extends('master')

@section('content')
<section>
    <div class="row">
        <div class="col-md-8">
            <article class="blog-post">
                <div class="blog-post-body">
                    <h2><a href="#">{{$category->name}}</a></h2>
                    <div class="blog-post-text">
                        {{ $category->description }}
                    </div>
                </div>
            </article>

            @include('partials.posts')
        </div>
        <div class="col-md-4 sidebar-gutter">
            @include('partials.sidebar')
        </div>
    </div>
</section>


@endsection
