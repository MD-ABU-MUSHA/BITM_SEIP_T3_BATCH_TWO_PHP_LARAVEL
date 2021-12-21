<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $blogs;
    public function index(){
        return view('blog.add');
    }


    public function create(Request $request){
        Blog::newBlog($request);
        return redirect()->back()->with('message', 'Blog info create Successful');
    }


    public function manage(){
//      $this->blogs =  Blog::all();
      $this->blogs =  Blog::orderBy('id','desc')->get();
//      $this->blogs =  Blog::orderBy('id','desc')->take(3)->get();
//      $this->blogs =  Blog::orderBy('id','desc')->first();
//      return $this->blogs;

        return view('blog.manage',['blogs' => $this->blogs]);
    }
}
