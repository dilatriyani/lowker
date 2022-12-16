<?php

namespace App\Http\Controllers\ShowData;

use App\Models\SliderHome;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeSliderController extends Controller
{
    public function index()
    {
        return view('slider',[
            "judul" => 'judul',
            "heading" => 'heading',
            "deskripsi" => 'deskripsi',
        
        ]);
    }

    public function show(SliderHome $slider_home)
    {
        return view('slider',
        [
            "judul" => "judul", 
            "heading" => "heading",
            "deskripsi" => "deskripsi",
            "slider_home" => $slider_home
            
        ]);
    }
}
