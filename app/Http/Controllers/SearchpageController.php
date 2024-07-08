<?php

namespace App\Http\Controllers;

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
}
