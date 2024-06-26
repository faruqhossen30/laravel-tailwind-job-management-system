<?php

namespace App\Http\Controllers\Admin\Attributes;

use App\Http\Controllers\Controller;
use App\Models\Attributes\JobTypes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class JobtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobtypes = JobTypes::latest()->paginate(10);
        return view('admin.jobtype.index',compact('jobtypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jobtype.create');
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
            'user_id' => Auth::user()->id
        ];

        JobTypes::create($data);
        Session::flash('create');
        return redirect()->route('jobtype.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jobtype = JobTypes::firstWhere('id',$id);
        return view('admin.jobtype.show', compact('jobtype'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jobtype = JobTypes::firstWhere('id',$id);
        return view('admin.jobtype.edit', compact('jobtype'));
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
            'user_id' => Auth::user()->id
        ];

        JobTypes::firstwhere('id', $id)->update($data);
        Session::flash('update');
        return redirect()->route('jobtype.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        JobTypes::firstwhere('id', $id)->delete();
        Session::flash('delete');
        return redirect()->route('jobtype.index');
    }
}
