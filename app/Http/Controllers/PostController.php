<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;
use TCG\Voyager\Models\User;

class PostController extends Controller
{
    public function index($slug)
    {
        //get the requested post, if it is published
        $post = Post::query()->where('is_published', true)->where('slug', $slug)->first();

        //get all the categories
        $categories = Category::all();

        //get all the tags
        $tags = Tag::all();

        //get the recent 5 posts
        $recent_posts = Post::where('is_published',true)->orderBy('created_at','desc')->take(5)->get();

        //related posts
        $related_posts = Post::where('is_published',true)->whereHas('tags', function ($q) use ($post) {
            return $q->whereIn('name', $post->tags->pluck('name'));
        })
            ->where('id', '!=', $post->id)->take(5)->get();

        //return the data to the corresponding view
        return view('post', array(
            'post' => $post,
            'categories' => $categories,
            'tags' => $tags,
            'recent_posts' => $recent_posts,
            'related_posts'=> $related_posts
        ));
    }
}
