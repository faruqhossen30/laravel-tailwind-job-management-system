<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogpageController extends Controller
{
    public function Blogpage()
    {
        $blogcategory = null;
        if (isset($_GET['blogcategory'])) {
            $blogcategory = $_GET['blogcategory'];
        }


        // return $blogcategory;
        $categories = Category::where('type','blog')->get();

        $blogs = Blog::when($blogcategory, function ($query, $blogcategory) {
            $query->whereHas('categories', function ($query) use ($blogcategory) {
                $query->whereIn('category_id', $blogcategory);
            });
        })
        ->paginate(10);

        $latestblog = Blog::when($blogcategory, function ($query, $blogcategory) {
            $query->whereHas('categories', function ($query) use ($blogcategory) {
                $query->whereIn('category_id', $blogcategory);
            });
        })


        ->latest()->take(4)->get();
        // return $latestblog;
        return view('pages.blogpage', compact('blogs','categories','latestblog'));
    }

    public function singleBlog($slug)
    {
        $blog = Blog::firstWhere('slug', $slug);
        // return $blog->thumbnail;
        return view('pages.single-blog',compact('blog'));
    }
}
