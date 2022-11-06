<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontEnd.home.home');
    }
    public function blogs(){
        return view('frontEnd.blogs.blogs');
    }
    public function blogDetails(){
        return view('frontEnd.blogs.blog-details');
    }
    public function contact(){
        return view('frontEnd.contact.contact');
    }
    public function about(){
        return view('frontEnd.about.about');
    }
    public function jobs(){
        return view('frontEnd.jobs.jobs');
    }
    public function singleJob(){
        return view('frontEnd.jobs.single-job');
    }
    public function jobDetails(){
        return view('frontEnd.jobs.job-details');
    }
}
