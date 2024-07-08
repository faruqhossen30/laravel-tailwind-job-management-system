<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
class ContactpageController extends Controller
{
    public function contactPage()  {

        return view('pages.contactpage');
    }
}
