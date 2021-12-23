<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UrdanController extends Controller
{
    public function index(){
        return view('front.home.home');
    }

    public function about(){
        return view('front.about.about');
    }

    public function contact(){
        return view('front.contact.contact');
    }
}
