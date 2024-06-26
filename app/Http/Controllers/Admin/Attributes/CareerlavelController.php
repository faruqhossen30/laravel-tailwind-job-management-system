<?php

namespace App\Http\Controllers\Admin\Attributes;

use App\Http\Controllers\Controller;
use App\Models\Attributes\CareerLevel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;


class CareerlavelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $careerlavels = CareerLevel::latest()->paginate(10);
        return view('admin.careerlavel.index',compact('careerlavels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.careerlavel.create');
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

        CareerLevel::create($data);
        Session::flash('create');
        return redirect()->route('careerlavel.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $careerlavel = CareerLevel::firstWhere('id',$id);
        return view('admin.careerlavel.show', compact('careerlavel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $careerlavel = CareerLevel::firstWhere('id',$id);
        return view('admin.careerlavel.edit', compact('careerlavel'));
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

        CareerLevel::firstwhere('id', $id)->update($data);
        Session::flash('update');
        return redirect()->route('careerlavel.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        CareerLevel::firstwhere('id', $id)->delete();
        Session::flash('delete');
        return redirect()->route('careerlavel.index');
    }
}
