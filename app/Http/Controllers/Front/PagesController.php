<?php

namespace App\Http\Controllers\Front;

use App\Category;
use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $categories = Category::withCount('Posts')->get();
        $latestPosts = Post::latestPosts()->get();
        $posts = Post::published()->paginate();
        return view('front.home', compact('posts','categories','latestPosts'));
    }
}
