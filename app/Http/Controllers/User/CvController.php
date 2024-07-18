<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cv;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class CvController extends Controller
{
    public function cvlist(){
        $cvlist = Cv::where('user_id', Auth::user()->id)->get();

        $user = Auth::user();

        // return $user->cvs;
        return view('user.cvupload',compact('cvlist'));
    }

    public function  create()
    {
        return view('user.cvupload');
    }
    public function cvStore(Request $request)
    {

        // $size = Storage::size();



        if ($request->hasFile('file')) {
            // Get the file
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
            $fileSize = $file->getSize();
        }

            $data = [
            'title'     =>  $fileName,
            'size'      => $fileSize,
        ];
        if ($request->file('file')) {
            $file = $request->file('file')->store('file/file');
            $data['file'] = $file;
        }

        $cv = Cv::create($data);
        Session::flash('update');
        return redirect()->back();
    }
}
