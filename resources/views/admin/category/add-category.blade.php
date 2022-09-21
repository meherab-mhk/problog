@extends('admin.master')

@section('title')
    Add Blog Category
@endsection

@section('body')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Blog Category</h3></div>
                    <div class="card-body">
                        <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                        <form action="{{route('create.blog-category')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="" class="col-md-3">Category Name</label>
                                <div class="col-md-9">
                                    <input class="form-control" id="inputFirstName" type="text" name="name" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Category Description</label>
                                <div class="col-md-9">
                                    <textarea name="description" id="" cols="30" rows="3" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Category Image</label>
                                <div class="col-md-9">
                                    <input class="form-control" id="inputFirstName" type="file" name="image" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Category Status</label>
                                <div class="col-md-9">
                                    <label for=""><input   type="radio" name="status" value="1" /> on</label>
                                    <label for=""><input   type="radio" name="status" value="0"/> off</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input class="btn btn-success" id="inputFirstName" type="submit" name="image" />
                                </div>
                            </div>



                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
