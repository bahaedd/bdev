@extends('master')

@section('content')
<section>
    <div class="row">
        <div class="col-md-8">
            <h1 class="my-4">You are searching for:
                <small>{{$key}}</small>
            </h1>
            @include('partials.posts')
        </div>
        <div class="col-md-4 sidebar-gutter">
            @include('partials.sidebar')
        </div>
    </div>
</section>


@endsection
