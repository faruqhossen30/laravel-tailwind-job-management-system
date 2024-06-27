<?php

namespace App\Http\Controllers;

use App\Models\Circular\Circular;
use Illuminate\Http\Request;

class JobListController extends Controller
{
    public function Joblistpage() {

        $circulars = Circular::with('jobtypes')->get();

        // return $circulars;
        return view('pages.joblist',compact('circulars'));

    }
}
