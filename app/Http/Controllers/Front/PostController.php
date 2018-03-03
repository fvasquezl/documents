<?php

namespace App\Http\Controllers\Front;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function show(Post $post)
    {
        $categories = Category::withCount('Posts')->get();
        $latestPosts = Post::latestPosts()->get();
        return view('front.show',compact('post','categories','latestPosts'));
    }
}
