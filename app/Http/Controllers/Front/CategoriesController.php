<?php

namespace App\Http\Controllers\Front;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function show(Category $category)
    {
        return view('front.home',[
           'title' => "Publicaciones de la categoria, '{$category->name}'",
           'posts' =>$category->posts()->published()->paginate(),
           'categories' => $category->withCount('Posts')->get(),
           'latestPosts' => $category->posts()->latestPosts()->get(),
        ]);
    }
}
