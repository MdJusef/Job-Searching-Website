<?php

namespace App\Http\Controllers;

use App\Models\job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function addJobPost(){
        return view('admin.job.add-job-post');
    }
    public function saveJobPost(Request $request){
        return $request;
    }
    public function manageJobPost(){
        return view('admin.job.manage-job-post',[
            'jobs'=>job::all()
        ]);
    }
}
