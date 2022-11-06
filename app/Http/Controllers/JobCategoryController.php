<?php

namespace App\Http\Controllers;

use App\Models\JobCategory;
use Illuminate\Http\Request;

class JobCategoryController extends Controller
{
    public function addCategory(){
        return view('admin.category.add-category');
    }
    public function manageCategory(){
        return view('admin.category.manage-category',[
            'categories' => JobCategory::all()
        ]);
    }
    public function saveCategory(Request $request){
        $categories = new JobCategory();
        $categories->category_name = $request->category_name;
        $categories->save();
        return back();
    }
    public function categoryStatus($id){
        $jobCategory = JobCategory::find($id);
        if ($jobCategory->status==1){
            $jobCategory->status = 0;
            $jobCategory->save();
            return back();
        }
        else{
            $jobCategory->status = 1;
            $jobCategory->save();
            return back();
        }
    }
}
