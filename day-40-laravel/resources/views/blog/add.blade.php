@extends('front.master')
@section('title')
    Add New Blog
@endsection

@section('body')
       <section class="py-5 bg-light">
           <div class="container">
               <div class="row">
                   <div class="col-md-8 col-md-offset-2">
                       <div class="card">
                           <div class="card-header text-center">
                               <h3>Add New Blog Form</h3>
                           </div>
                           <div class="card-body">
                               @if($message = Session::get('message'))
                                   <h3 class="text-center text-success">{{$message}}</h3>
                                   @endif
                               <form action="{{route('new-blog')}}" method="POST" enctype="multipart/form-data">
                                   @csrf
                                   <div class="form-group row">
                                       <label for="" class="col-form-label col-md-3 text-center">Blog Title</label>
                                       <div class="col-md-9">
                                           <input type="text" class="form-control" name="title">
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label for="" class="col-form-label col-md-3 text-center">Author Name</label>
                                       <div class="col-md-9">
                                           <input type="text" class="form-control" name="author">
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label for="" class="col-form-label col-md-3 text-center">Blog Description</label>
                                       <div class="col-md-9">
                                           <textarea class="form-control" name="description"></textarea>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label for="" class="col-form-label col-md-3 text-center">Image</label>
                                       <div class="col-md-9">
                                           <input type="file" class="form-control" name="image">
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label for="" class="col-form-label col-md-3 text-center"></label>
                                       <div class="col-md-9">
                                           <input type="submit" class="btn btn-outline-success" name="btn" value="Create New Blog"/>
                                       </div>
                                   </div>
                               </form>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>
@endsection



