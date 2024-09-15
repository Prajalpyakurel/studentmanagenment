<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home()
    {
        return view('website.pages.home');
    }
    public function aboutus()
    {
        return view('website.pages.aboutus');
    }
    public function services()
    {
        return view('website.pages.service');
    }
    public function courses()
    {
        return view('website.pages.courses');
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
        return view('website.pages.clients');
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
