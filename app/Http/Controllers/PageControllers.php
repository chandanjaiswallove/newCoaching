<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageControllers extends Controller
{
    ///Defualt files 
    public function home()
    {
        return view("welcome");
    }
    
    public function contact()
    {
        return view('pages.contactus');
    }

    public function about()
    {
        return view('pages.aboutus');
    }
     
    public function instructor()
    {
        return view('components.instructors');
    }


    public function gallery()
    {
        return view('pages.gallery');
    }

    public function blog()
    {
        return view('pages.blog');
    }

    public function allcourse()
    {
        return view('pages.allcourse');
    }

    public function joinNow()
    {
        return view('pages.join_now');
    }


    public function event()
    {
        return view('pages.event');
    }
    public function result()
    {
        return view('pages.result');
    }
    public function developer()
    {
        return view('pages.developer');
    }
    public function pageNotFound()
    {
        return view('pages.page_not_found');
    }

    //// Courses Tab files

    public function coursefirst()
    {
        return view('pages.course_one');
    }
    public function course_two()
    {
        return view('pages.course_two');
    }
    public function course_three()
    {
        return view('pages.course_three');
    }
    public function course_four()
    {
        return view('pages.course_four');
    }
    public function course_five()
    {
        return view('pages.course_five');
    }
    public function course_six()
    {
        return view('pages.course_six');
    }

    public function course_seven()
    {
        return view('pages.course_seven');
    }
    public function course_eight()
    {
        return view('pages.course_eight');
    }

    public function course_nine()
    {
        return view('pages.course_nine');
    }

}
