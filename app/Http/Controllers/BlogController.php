<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class BlogController extends Controller
{
    //category list
    public function category ($slug){
        $category = Category::where('slug', $slug)->first();
        return view('blog.category', [
            'category' => $category,
            'articles' => $category->articles()->where('published', 1)->paginate(12)
        ]);
    }
}
