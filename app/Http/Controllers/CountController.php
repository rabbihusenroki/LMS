<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Blog;
use App\Models\Teacher;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CountController extends Controller
{
    public function Count(){

        $totalcourse = Course::all();
        $totaluser = Auth::user();
        $totalteacher = Teacher::all();
        $totalmessage = Contact::all();

       
        return view('admin.index', compact('totalcourse','totaluser','totalteacher','totalmessage'));


    }
}
