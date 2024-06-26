<?php

namespace App\Http\Controllers\Admin\Attributes;

use App\Http\Controllers\Controller;
use App\Models\Attributes\SalaryPeriod;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class SalaryperiodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salaryperiods = SalaryPeriod::latest()->paginate(10);
        return view('admin.salaryperiod.index',compact('salaryperiods'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.salaryperiod.create');
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

        SalaryPeriod::create($data);
        Session::flash('create');
        return redirect()->route('salaryperiod.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $salaryperiod = SalaryPeriod::firstWhere('id',$id);
        return view('admin.salaryperiod.show', compact('salaryperiod'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $salaryperiod = SalaryPeriod::firstWhere('id',$id);
        return view('admin.salaryperiod.edit', compact('salaryperiod'));
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

        SalaryPeriod::firstwhere('id', $id)->update($data);
        Session::flash('update');
        return redirect()->route('salaryperiod.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        SalaryPeriod::firstwhere('id', $id)->delete();
        Session::flash('delete');
        return redirect()->route('salaryperiod.index');
    }
}
