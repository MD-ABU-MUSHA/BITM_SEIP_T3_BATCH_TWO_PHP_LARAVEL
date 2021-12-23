@extends('front.master')
@section('title')
    Add New Blog
@endsection

@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>Add  Blog Information</h3>
                        </div>
                        <div class="card-body">
                            @if($message = Session::get('message'))
                                <h3 class="text-center text-success">{{$message}}</h3>
                            @endif
                           <table class="table table-bordered table-hover">
                               <thead class="text-center">
                               <tr >
                                   <th>SL No</th>
                                   <th>Blog Title</th>
                                   <th>Blog Author</th>
                                   <th>Blog Image</th>
                                   <th style="width: 30%;">Blog Description</th>
                                   <th>Action</th>
                               </tr>
                               </thead>
                               <tbody>
                               @foreach($blogs as $blog)
                               <tr class="text-center">
                                   <td>{{$loop->iteration}}</td>
                                   <td>{{$blog->title}}</td>
                                   <td>{{$blog->author}}</td>
                                   <td><img src="{{asset($blog->image)}}" alt="" height="100" width="100"/> </td>
                                   <td>{{$blog->description}}</td>
                                   <td>
                                       <a href="{{route('edit-blog',['id' => $blog->id])}}" class="btn btn-warning">Edit</a>
                                       <a href="{{route('delete-blog',['id' => $blog->id])}}" class="btn btn-danger">Delete</a>
                                   </td>
                               </tr>
                                   @endforeach
                               </tbody>
                           </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



