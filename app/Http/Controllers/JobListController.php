<?php

namespace App\Http\Controllers;

use App\Models\Attributes\CareerLevel;
use App\Models\Attributes\Education;
use App\Models\Attributes\JobIndustry;
use App\Models\Attributes\JobTypes;
use App\Models\Category;
use App\Models\Circular\Circular;
use App\Models\Circular\CircularCategory;
use Illuminate\Http\Request;

class JobListController extends Controller
{
    public function Joblistpage()
    {
        $careerlabel = null;
        if (isset($_GET['careerlabel'])) {
            $careerlabel = $_GET['careerlabel'];
        }
        $educatonquery = null;
        if (isset($_GET['educatonquery'])) {
            $educatonquery = $_GET['educatonquery'];
        }
        $queryjobtypes = null;
        if (isset($_GET['queryjobtypes'])) {
            $queryjobtypes = $_GET['queryjobtypes'];
        }
        $jobindustryquery = null;
        if (isset($_GET['jobindustryquery'])) {
            $jobindustryquery = $_GET['jobindustryquery'];
        }
        // return   $jobindustryquery;

        $circulars = Circular::with('jobtypes.jobtype')->when($careerlabel, function ($query, $careerlabel) {
            $query->whereHas('careerlabels', function ($query) use ($careerlabel) {
                $query->whereIn('career_label_id', $careerlabel);
            });
        })

        ->when($educatonquery, function ($query, $educatonquery) {
            $query->whereHas('educations', function ($query) use ($educatonquery) {
                $query->whereIn('education_id', $educatonquery);
            });
        })
        ->when($jobindustryquery, function ($query, $jobindustryquery) {
            $query->whereHas('jobindustries', function ($query) use ($jobindustryquery) {
                $query->whereIn('job_industry_id', $jobindustryquery);
            });
        })
        ->when($queryjobtypes, function ($query, $queryjobtypes) {
            $query->whereHas('jobtypes', function ($query) use ($queryjobtypes) {
                $query->whereIn('job_type_id', $queryjobtypes);
            });
        })
            ->latest()->paginate(3);
        // return $circulars;
        $circularscategory = Category::withcount('circulars')->take(5)->get();
        $careerlabels      = CareerLevel::get();
        $educations        = Education::get();
        $jobtypes          = JobTypes::get();
        $jobindustries     = JobIndustry::get();
        return view('pages.joblist', compact('circulars', 'circularscategory', 'careerlabels','educations','jobtypes','jobindustries'));
    }


    public function singleJob($slug)
    {
        // $category     = Category:: with('circula)->firstWhere('id', $id);
        // return  $category;
        $circular = Circular::with('company','jobskills', 'careerlabels.jobcareerlables', 'jobtypes.jobtype','educations.education')
        ->firstWhere('slug', $slug);

        // return $circular->latestCircular();

        // return $circular;
        return view('pages.single-job', compact('circular'));
    }
}
