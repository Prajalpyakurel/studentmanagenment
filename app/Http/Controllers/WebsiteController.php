<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Testimonial;
use App\Models\Team;
use App\Models\Training;
use App\Models\TrainingCategory; // Import TrainingCategory

class WebsiteController extends Controller
{
    public function home()
    {
        $teams = Team::all();
        $testimonials = Testimonial::all();
        return view('website.pages.home',compact('testimonials','teams'));
    }
    public function aboutus()
    {
        $teams = Team::all();
        $testimonials = Testimonial::all();
        return view('website.pages.aboutus',compact('testimonials','teams'));
    }
    public function services()
    {
        return view('website.pages.service');
    }
    public function courses()

    {
        $trainings = Training::with('category')->get();
        return view('website.pages.courses',compact('trainings'));
    }
    public function gallery()
    {
        return view('website.pages.gallery');
    }
    public function contact()
    {
        return view('website.pages.contact');
    }
    public function clients()
    {

        $clients = Client::all();
        return view('website.pages.clients',compact('clients'));
    }
    public function blogs()
    {
        return view('website.pages.blogs');
    }
    public function WebDevelopment()
    {
        return view('website.pages.webdevelopment');
    }
    public function digitalmarketing()
    {
        return view('website.pages.digitalmarketing');
    }
    public function MobileDevelopmentService()
    {
        return view('website.pages.mobileapp');
    }
    public function WebDesignService()
    {
        return view('website.pages.webdesign');
    }
    public function Domainservice()
    {
        return view('website.pages.domain');
    }
    public function webmaintenance()
    {
        return view('website.pages.webmaintenance');
    }





}
