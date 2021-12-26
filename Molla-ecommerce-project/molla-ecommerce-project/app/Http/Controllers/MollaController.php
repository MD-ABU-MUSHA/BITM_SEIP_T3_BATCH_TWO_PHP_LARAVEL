<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MollaController extends Controller
{
    public function index()
    {
        return view('front.home.home');
    }

    public function about()
    {
        return view('front.about.about');
    }

    public function contact()
    {
        return view('front.contact.contact');
    }


    public function categoryProduct()
    {
        return view('front.category.category');
    }

    public function productDetail()
    {
        return view('front.product.detail');
    }
}
