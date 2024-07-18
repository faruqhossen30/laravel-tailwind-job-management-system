<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserDashboardController extends Controller
{
    public function userProfile($id)
    {
        $user = User::where('id', $id)->first();
        return view('user.dashboard',compact('user'));
    }
    public function userProfileupdate(Request $request, string $id)
    {

        $data = [
            'name'  => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'bio'   => $request->bio,
        ];

        if ($request->file('thumbnail')) {
            $file_name = $request->file('thumbnail')->store('thumbnail/profile');
            $data['thumbnail'] = $file_name;
        }
        $user = User::firstwhere('id', $id)->update($data);
        Session::flash('update');
        return redirect()->back();
    }

    public function managJob()
    {

     return   view('user.manage-job');
    }

    public function bookmarkJob() {


        return view('user.bookmark-job');

    }
}
