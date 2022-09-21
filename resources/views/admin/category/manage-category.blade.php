@extends('admin.master')
@section('title')
    Manage Category list
@endsection
@section('body')

    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Category list
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>

            <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{$category->name}}</td>
                <td>{{$category->description}}</td>
                <td>{{$category->status == 1 ? 'Publish' : 'Draft'}}</td>
                <td>
                    <img src="{{asset($category->image)}}" alt="" width="80" height="80">
                </td>

                <td>
                    <a href="" class="btn btn-sm btn-success">
                        <i class="fa fa-edit"></i>
                    </a>
                    <a href="" class="btn btn-sm btn-danger">
                        <i class="fa fa-trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>
    </div>
@endsection
