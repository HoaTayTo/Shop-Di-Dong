<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
class SliderController extends Controller
{
    public function index()
    {
        $banner = Banner::all();
        return view('admin.Banner.index',[
            'banner'=>$banner,
        ]);
    }
}
