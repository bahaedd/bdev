<aside>
    <!-- sidebar-widget -->
    <div class="sidebar-widget">
        <form class="d-flex justify-content-center h-100" action="{{route('search')}}" method="GET" role="search">
            @csrf
            <div class="searchbar">
              <input class="search_input" type="text" name="q" placeholder="Search...">
              <button type="submit" class="search_icon btn btn-default"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- sidebar-widget -->
    <div class="sidebar-widget">
        <h3 class="sidebar-title">About Me</h3>
        <div class="widget-container widget-about">
            <a href="post.html"><img src="{{ asset('assets/images/photo.jpg') }}" alt="" height="50"></a>
            <h4>Bahaeddine</h4>
            <div class="author-title">Full Stack Web Developer</div>
            <p>While everyone’s eyes are glued to the runway, it’s hard to ignore that there are major fashion moments on the front row too.</p>
        </div>
    </div>
    <!-- sidebar-widget -->
    <div class="sidebar-widget">
        <h3 class="sidebar-title">Featured Posts</h3>
        <div class="widget-container">
            @foreach ($recent_posts as $post)
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
    <!-- sidebar-widget -->
    <div class="sidebar-widget newslatter">
        <h3 class="sidebar-title">Subscribe to our newsletter</h3>
        <form>
            <div class="input-group">
                <input type="email" class="form-control mr-2" placeholder="Enter your email">
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">Subscribe Now</button>
                </span>
            </div>
    </div>
    <!-- sidebar-widget -->
    <div class="sidebar-widget">
        <h3 class="sidebar-title">Categories</h3>
        <div class="widget-container">
            <ul>
                @foreach ($categories as $cat)
                <li><a href="/category/{{$cat->slug}}">{{ $cat->name }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    </div>
    </aside>
