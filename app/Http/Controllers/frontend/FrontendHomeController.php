<?php

namespace App\Http\Controllers\frontend;
use App\Models\Course;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class FrontendHomeController extends Controller
{
    public function index()
    {

        $courses = Course::all();
        return view('website.pages.home', compact('courses'));
    }
}
