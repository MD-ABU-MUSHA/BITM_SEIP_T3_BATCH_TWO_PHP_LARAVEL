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
                                   <th>Blog Description</th>
                                   <th>Action</th>
                               </tr>
                               </thead>
                               <tbody>
                               @foreach($blogs as $blog)
                               <tr class="text-center">
                                   <td>{{$loop->iteration}}</td>
                                   <td>{{$blog->title}}</td>
                                   <td>{{$blog->author}}</td>
                                   <td><img src="{{asset($blog->image)}}" alt="" height="200" width="200"/> </td>
                                   <td>{{$blog->description}}</td>
                                   <td>
                                       1
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



