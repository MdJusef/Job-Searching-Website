<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use function GuzzleHttp\Promise\all;

class AdminController extends Controller
{
    public function index(){
        return view('admin.home.home');
    }
    public function slider(){
        return view('admin.slider.slider');
    }
    public function saveSlider(Request $request){
        $slider = new Slider();
        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->slider_image = $this->saveImage($request);
        $slider->save();
        return back()->with('message','slide added');
    }
    public function saveImage($request){
        $image = $request->file('slider_image');
        $imageName = rand().'.'.$image->getClientOriginalExtension();
        $directory = 'admin/slider/slider-image/';
        $imgUrl = $directory.$imageName;
        $image->move($directory,$imageName);
        return $imgUrl;
    }
    public function manageSlider(){
        return view('admin.slider.manage-slider',[
            'sliders' => Slider::all()
        ]);
    }
}
