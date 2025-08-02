<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homepage()
    {
        return view('frontend.index');
    }

    function about(){
        return view('frontend.about');
    }
}

