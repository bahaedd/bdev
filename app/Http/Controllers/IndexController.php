<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;
use TCG\Voyager\Models\User;

class IndexController extends Controller
{
    public function index()
    {
        //get the posts that are published, sort by decreasing order of "id".
        $posts = Post::where('is_published',true)->orderBy('id','desc')->paginate(5);

        //get the featured posts
        $featured_posts = Post::where('is_published',true)->where('is_featured',true)->orderBy('id','desc')->take(5)->get();

        //get all the categories
        $categories = Category::all();

        //get all the tags
        $tags = Tag::all();

        //get the recent 5 posts
        $recent_posts = Post::where('is_published',true)->orderBy('created_at','desc')->take(5)->get();

        //return the data to the corresponding view
        return view('home', array(
            'posts' => $posts,
            'featured_posts' => $featured_posts,
            'categories' => $categories,
            'tags' => $tags,
            'recent_posts' => $recent_posts
        ));
    }


    public function search(Request $request)
    {
        $key = trim($request->get('q'));
        $posts = Post::query()
        ->where('title', 'like', "%{$key}%")
            ->orWhere('content', 'like', "%{$key}%")
            ->orderBy('created_at', 'desc')->paginate(5);

        //get all the categories
        $categories = Category::all();

        //get all the tags
        $tags = Tag::all();

        //get the recent 5 posts
        $recent_posts = Post::where('is_published',true)->orderBy('created_at','desc')->take(5)->get();

        return view('search', array(
            'key'=>$key,
            'posts'=>$posts,
            'categories' => $categories,
            'tags' => $tags,
            'recent_posts' => $recent_posts
        ));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
