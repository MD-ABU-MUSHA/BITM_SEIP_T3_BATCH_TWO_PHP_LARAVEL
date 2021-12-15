<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    private $product;
    private $data;



    public function index()
    {
        $this->product = new Product();
        $this->data  = $this->product->products();
//        echo '<pre>';
//        print_r($this->data);
//        echo '</pre>';
//        exit();
        return view('home',['products' => $this->data]);
    }


    public function  about()
    {
        return view('about');
    }


    public  function registration()
    {
        return view('registration');
    }
}
