<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slideshow;

class SlideshowController extends Controller
{
    function listAll(){

        $slideshows = Slideshow::paginate(10);

        return view('admin.slideshow.index',compact('slideshows'));
    }
}