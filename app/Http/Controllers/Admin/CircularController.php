<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Attributes\JobindustryController;
use App\Http\Controllers\Controller;
use App\Models\Attributes\CareerLevel;
use App\Models\Attributes\Education;
use App\Models\Attributes\JobIndustry;
use App\Models\Attributes\JobTypes;
use App\Models\Attributes\SalaryPeriod;
use App\Models\Attributes\Skill;
use App\Models\Category;
use App\Models\Circular\Circular;
use App\Models\Circular\CircularCareerlabel;
use App\Models\Circular\CircularCategory;
use App\Models\Circular\CircularEducation;
use App\Models\Circular\CircularJobIndustry;
use App\Models\Circular\CircularJobtype;
use App\Models\Circular\CircularSalaryperiod;
use App\Models\Circular\CircularSkill;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class CircularController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $circulars = Circular::latest()->paginate(25);
        return view('admin.circular.index', compact('circulars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories    = Category::where('type','circular')->get();
        $educations    = Education::get();
        $skills        = Skill::get();
        $jobindustries = JobIndustry::orderBy('name', 'asc')->get();
        $careerlabels  = CareerLevel::get();
        $salarypreiods = SalaryPeriod::get();
        $jobtypes      = JobTypes::get();
        $company       = Company::get();

        return view('admin.circular.create', compact('company','categories', 'educations', 'skills', 'jobindustries', 'careerlabels', 'salarypreiods', 'jobtypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //   return $request->all();

        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $data = [
            'title'                => $request->title,
            'slug'                 => $request->title,
            'description'          => $request->description,
            'user_id'              => Auth::user()->id,
            'company_id'           => $request->company_id,
            'category_id'          => $request->category_id,
            'start_date'           => $request->start_date,
            'end_date'             => $request->end_date,
            'min_salary'           => $request->min_salary,
            'max_salary'           => $request->max_salary,
            'organization_name'    => $request->organization_name,
            'organization_website' => $request->organization_website,
            'apply_link'           => $request->apply_link,
            'vacancy'              => $request->vacancy,
        ];

        if ($request->file('thumbnail')) {
            $file_name = $request->file('thumbnail')->store('thumbnail/circular');
            $data['thumbnail'] = $file_name;
        }

        $circular = Circular::create($data);

        if ($circular) {
            // Education
            if (!empty($request->education)) {
                foreach ($request->education as $education) {
                    CircularEducation::create([
                        'circular_id' => $circular->id,
                        'education_id' => $education
                    ]);
                }
            }
            // Skill
            if (!empty($request->skill)) {
                foreach ($request->skill as $skill) {
                    CircularSkill::create([
                        'circular_id' => $circular->id,
                        'skill_id' => $skill
                    ]);
                }
            }
            // job_industry
            if (!empty($request->job_industry)) {
                foreach ($request->job_industry as $job_industry) {
                    CircularJobIndustry::create([
                        'circular_id' => $circular->id,
                        'job_industry_id' => $job_industry
                    ]);
                }
            }
            // career_label
            if (!empty($request->career_label)) {
                foreach ($request->career_label as $career_label) {
                    CircularCareerlabel::create([
                        'circular_id' => $circular->id,
                        'career_label_id' => $career_label
                    ]);
                }
            }
            // salary_period
            if (!empty($request->salary_period)) {
                foreach ($request->salary_period as $salary_period) {
                    CircularSalaryperiod::create([
                        'circular_id' => $circular->id,
                        'salary_period_id' => $salary_period
                    ]);
                }
            }
            // job_type
            if (!empty($request->job_type)) {
                foreach ($request->job_type as $job_type) {
                    CircularJobtype::create([
                        'circular_id' => $circular->id,
                        'job_type_id' => $job_type
                    ]);
                }
            }
            // circular category
            // if (!empty($request->category_ids)) {
            //     foreach ($request->category_ids as $categoryid) {
            //         CircularCategory::create([
            //             'circular_id' => $circular->id,
            //             'category_id' => $categoryid
            //         ]);
            //     }
            // }
        }

        $user = Auth::user();
        // $users = User::all();
        // foreach ($users as $user) {
        //     $user->notify(new UserjobNotification($circular->title));
        // }


        Session::flash('create');
        return redirect()->route('circular.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $circular = Circular::with('skills',  'jobindustries', 'careerlabels', 'jobtypes', 'salaryperiods')->firstWhere('id', $id);
        $categories    = Category::where('type','circular')->get();
        $educations    = Education::get();
        $skills        = Skill::get();
        $jobindustries = Jobindustry::get();
        $careerlabels  = CareerLevel::get();
        $salarypreiods = SalaryPeriod::get();
        $jobtypes      = JobTypes::get();
        $salaryperiods = SalaryPeriod::get();
        $company       = Company::get();
        // return $circular->categories;
        return view('admin.circular.edit', compact('company','circular', 'educations', 'skills' ,'categories', 'jobindustries', 'careerlabels', 'salarypreiods', 'jobtypes', 'salaryperiods'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'       => 'required',
            'description' => 'required'
        ]);
        $data = [
            'title'                => $request->title,
            'slug'                 => $request->title,
            'description'          => $request->description,
            'user_id'              => Auth::user()->id,
            'category_id'          => $request->category_id,
            'company_id'           => $request->company_id,
            'start_date'           => $request->start_date,
            'end_date'             => $request->end_date,
            'min_salary'           => $request->min_salary,
            'max_salary'           => $request->max_salary,
            'organization_name'    => $request->organization_name,
            'organization_website' => $request->organization_website,
            'apply_link'           => $request->apply_link,
            'vacancy'              => $request->vacancy,

        ];

        if ($request->file('thumbnail')) {
            $file_name = $request->file('thumbnail')->store('thumbnail/circular');
            $data['thumbnail'] = $file_name;
        }


        $circular = Circular::firstwhere('id', $id)->update($data);

        if ($circular) {
            // Education
            if (!empty($request->education)) {
                CircularEducation::where('circular_id', $id)->delete();
                foreach ($request->education as $education) {
                    CircularEducation::create([
                        'circular_id' => $id,
                        'education_id' => $education,
                    ]);
                }
            }

            // Skill
            if (!empty($request->skill)) {
                CircularSkill::where('circular_id', $id)->delete();
                foreach ($request->skill as $skill) {
                    CircularSkill::create([
                        'circular_id' => $id,
                        'skill_id' => $skill
                    ]);
                }
            }
            // job_industry
            if (!empty($request->job_industry)) {
                CircularJobIndustry::where('circular_id', $id)->delete();
                foreach ($request->job_industry as $job_industry) {
                    CircularJobIndustry::create([
                        'circular_id' => $id,
                        'job_industry_id' => $job_industry
                    ]);
                }
            }
            // career_label
            if (!empty($request->career_label)) {
                CircularCareerlabel::where('circular_id', $id)->delete();
                foreach ($request->career_label as $career_label) {
                    CircularCareerlabel::create([
                        'circular_id' => $id,
                        'career_label_id' => $career_label
                    ]);
                }
            }
            // salary_period
            if (!empty($request->salary_period)) {
                CircularSalaryperiod::where('circular_id', $id)->delete();
                foreach ($request->salary_period as $salary_period) {
                    CircularSalaryperiod::create([
                        'circular_id' => $id,
                        'salary_period_id' => $salary_period
                    ]);
                }
            }
            // job_type
            if (!empty($request->job_type)) {
                CircularJobtype::where('circular_id', $id)->delete();
                foreach ($request->job_type as $job_type) {
                    CircularJobtype::create([
                        'circular_id' => $id,
                        'job_type_id' => $job_type
                    ]);
                }
            }

            // if (!empty($request->category_ids)) {
            //     CircularCategory::where('circular_id', $id)->delete();
            //     foreach ($request->category_ids as $categoryid) {
            //         CircularCategory::create([
            //             'circular_id' => $id,
            //             'category_id' => $categoryid
            //         ]);
            //     }
            // }
        }



        Session::flash('update');
        return redirect()->route('circular.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $circular = Circular::findOrFail($id);
        Storage::delete($circular->thumbnail);
        $circular->delete();
        return redirect()->route('circular.index')->with('success','data successfully Deleted');
    }
}
