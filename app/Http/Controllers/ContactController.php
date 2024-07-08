<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{


public function create() {

    return view('pages.contactpage');

}
    public function send(Request $request)
    {
        // return $request->all();
        $data = [
            'name'    => $request->name,
            'email'   => $request->email,
            'phone'   => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message
        ];
        Mail::to('admin@gmail.com')->send(new ContactMail($data));
        return redirect()->back();
    }
}
