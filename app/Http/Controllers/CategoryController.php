<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;
use TCG\Voyager\Models\User;

class CategoryController extends Controller
{
    public function index($slug)
    {
        //get the requested category
        $category = Category::query()->where('slug', $slug)->first();

        //get the posts in that category
        $posts = Post::where('category_id', $category->id)->paginate(5);

        //get all the categories
        $categories = Category::all();

        //get all the tags
        $tags = Tag::all();

        //get the recent 5 posts
        $recent_posts = Post::where('is_published',true)->orderBy('created_at','desc')->take(5)->get();

        //return the data to the corresponding view
        return view('category', array(
            'category' => $category,
            'posts' => $posts,
            'categories' => $categories,
            'tags' => $tags,
            'recent_posts' => $recent_posts
        ));
    }
}
