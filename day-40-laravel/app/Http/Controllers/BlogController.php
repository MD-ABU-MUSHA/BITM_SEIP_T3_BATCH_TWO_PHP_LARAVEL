<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Session;

class BlogController extends Controller
{
    private $blogs;
    private $blog;
    public function index(){
        return view('blog.add');
    }


    public function create(Request $request){
        Blog::newBlog($request);
        return redirect()->back()->with('message', 'Blog info create Successful');
    }


    public function manage(){
        Session::put('id', 'BITM');
//      $this->blogs =  Blog::all();
      $this->blogs =  Blog::orderBy('id','desc')->get();
//      $this->blogs =  Blog::orderBy('id','desc')->take(3)->get();
//      $this->blogs =  Blog::orderBy('id','desc')->first();
//      return $this->blogs;

        return view('blog.manage',['blogs' => $this->blogs]);
    }


    public function edit($id){
        Session::forget('id');
        $this->blog = Blog::find($id);
        return view('blog.edit',['blog' => $this->blog]);
    }


    public function update(Request $request){
            Blog::updateBlog($request);
            return redirect('/manage-blog')->with('message','Blog info update Successfully');
    }


    public function delete($id){
       Blog::deleteBlog($id);
       return redirect()->back()->with('message', 'Blog info delete Successfully');
    }
}
