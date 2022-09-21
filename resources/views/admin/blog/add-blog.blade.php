@extends('admin.master')

@section('title')
    Add Blog
@endsection

@section('body')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Blog</h3></div>
                    <div class="card-body">
                        <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                        <form action="{{route('create.blog')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Select Category</label>
                                <div class="col-md-9">
                                    <select name="category_id" id="" class="form-control">
                                        <option value="">--Select Category</option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Blog Title</label>
                                <div class="col-md-9">
                                    <input class="form-control" id="inputFirstName" type="text" name="title" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Blog Description</label>
                                <div class="col-md-9">
                                    <textarea name="description" id="" cols="30" rows="3" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Blog Image</label>
                                <div class="col-md-9">
                                    <input class="form-control" id="inputFirstName" type="file" name="image" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Publication Status</label>
                                <div class="col-md-9">
                                    <label for=""><input   type="radio" name="status" value="1" /> on</label>
                                    <label for=""><input   type="radio" name="status" value="0"/> off</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input class="btn btn-success" id="inputFirstName" type="submit" value="Add New Blog" />
                                </div>
                            </div>



                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
