<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Circular\Circular;
use Illuminate\Http\Request;

class SearchpageController extends Controller
{
    public function index()
    {
        $keyword = null;
        if (isset($_GET['keyword'])) {
            $keyword = trim($_GET['keyword']);
        }


        $circulars = Circular::when($keyword, function($query, $keyword){
            return $query->where('title', 'like', '%' . $keyword . '%');
        })->latest()
        ->paginate(5);
        $circularscategory = Category::take(5)->get();
        // return  $circulars;
        return view('pages.joblist',compact('circulars','circularscategory'));
    }


    public function blogSearch(){

        $blogcategory = null;
        if (isset($_GET['blogcategory'])) {
            $blogcategory = $_GET['blogcategory'];
        }

        $keyword = null;
        if (isset($_GET['keyword'])) {
            $keyword = trim($_GET['keyword']);
        }

        $blogs = Blog::when($keyword, function($query, $keyword){
            return $query->where('title', 'like', '%' . $keyword . '%');
        })->latest()
        ->paginate(5);

        // return $blogs;
        $categories = Category::take(5)->get();
        $latestblog = Blog::when($blogcategory, function ($query, $blogcategory) {
            $query->whereHas('categories', function ($query) use ($blogcategory) {
                $query->whereIn('category_id', $blogcategory);
            });
        })


        ->latest()->take(4)->get();
        return view('pages.blogpage',compact('blogs','categories','latestblog'));
    }
}
