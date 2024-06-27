<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogpageController extends Controller
{
    public function Blogpage()
    {

        $blogs = Blog::paginate(10);
        return view('pages.blogpage', compact('blogs'));
    }

    public function singleBlog()
    {
        return view('pages.single-blog');
    }
}
