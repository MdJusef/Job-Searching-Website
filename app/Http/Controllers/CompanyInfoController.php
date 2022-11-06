<?php

namespace App\Http\Controllers;

use App\Models\CompanyInfo;
use Illuminate\Http\Request;

class CompanyInfoController extends Controller
{
    public function addCompany(){
        return view('admin.company.add-company');
    }
    public function manageCompany(){
        return view('admin.company.manage-company',[
            'companyDetails' => CompanyInfo::all()
        ]);
    }
    public function saveCompany(Request $request){
        $companyDetails = new CompanyInfo();
        $companyDetails->company_name = $request->company_name;
        $companyDetails->address = $request->address;
        $companyDetails->company_logo = $this->saveImage($request);
        $companyDetails->save();
        return back();
    }
    public function saveImage($request){
        $image = $request->file('company_logo');
        $imageName = rand().'.'.$image->getClientOriginalExtension();
        $directory = 'admin/company/company-image/';
        $imgUrl = $directory.$imageName;
        $image->move($directory,$imageName);
        return $imgUrl;
    }
    public function companyStatus($id){
        $companyInfo = CompanyInfo::find($id);
        if ($companyInfo->status==1){
            $companyInfo->status = 0;
            $companyInfo->save();
            return back();
        }
        else{
            $companyInfo->status = 1;
            $companyInfo->save();
            return back();
        }
    }
}
