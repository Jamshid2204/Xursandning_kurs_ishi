<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('layouts.index');
    }

    public function about(){
        return view('layouts.about');
    }

    public function appointment(){
        return view('layouts.appointment');
    }

    public function blog(){
        return view('layouts.blog');
    }

    public function contact(){
        return view('layouts.contact');
    }

    public function  feature(){
        return view('layouts.feature');
    }

    public function service(){
        return view('layouts.service');
    }

    public function team(){
        return view('layouts.team');
    }

    public function testimonial(){
        return view('layouts.testimonial');
    }

    public function error(){
        return view('layouts.404');
    }

    public function more(){
        return view('layouts.more');
    }
}
