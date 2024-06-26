<?php

namespace App\Http\Controllers\Admin\Attributes;

use App\Http\Controllers\Controller;
use App\Models\Attributes\JobIndustry;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class JobindustryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobindustries = JobIndustry::latest()->paginate(10);
        return view('admin.jobindustry.index',compact('jobindustries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jobindustry.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $data = [
            'name' => $request->name,
            'slug' => $request->name,
            'user_id' => Auth::user()->id,
        ];
        if($request->file('thumbnail')){
            $file_name = $request->file('thumbnail')->store('thumbnail/category');
            $data['thumbnail'] = $file_name;
        }

        JobIndustry::create($data);
        Session::flash('create');
        return redirect()->route('jobindustry.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jobindustry = JobIndustry::firstWhere('id',$id);
        return view('admin.jobtype.show', compact('jobindustry'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jobindustry = JobIndustry::firstWhere('id',$id);
        return view('admin.jobindustry.edit', compact('jobindustry'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $data = [
            'name' => $request->name,
            'slug' => $request->name,
            'user_id' => Auth::user()->id,
        ];

        if($request->file('thumbnail')){
            $file_name = $request->file('thumbnail')->store('thumbnail/category');
            $data['thumbnail'] = $file_name;
        }

        JobIndustry::firstwhere('id', $id)->update($data);
        Session::flash('update');
        return redirect()->route('jobindustry.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $file = JobIndustry::firstwhere('id', $id)->thumbnail;
        if($file){
            Storage::disk('local')->delete('public/jobindustry/' . $file);
        }
        Jobindustry::firstwhere('id', $id)->delete();
        Session::flash('delete');
        return redirect()->route('jobindustry.index');
    }
}
