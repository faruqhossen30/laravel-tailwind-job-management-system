<?php

namespace App\Http\Controllers;

use App\Models\Attributes\JobIndustry;
use App\Models\Category;
use App\Models\Circular\Circular;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function Homepage()
    {
        $jobindustries = JobIndustry::withcount('circulars')->take(8)->get();
        // return $jobindustries;
        $categories = Category::with('circulars')->get();
        $circulars = Circular::latest()
            ->with( 'company', 'jobindustries.jobindustry', 'skills.skill', 'jobtypes.jobtype')
            ->take(5)->get();

        return view('homepage', compact('jobindustries', 'circulars', 'categories'));
    }
}
