@extends('admin.master')
@section('title')
    Manage Blog list
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
                <th>Serial</th>
                <th>Author</th>
                <th>Title</th>
                <th>Description</th>
                <th>Status</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            </thead>

            <tbody>
            @foreach($blogs as $blog)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$blog->author}}</td>
                    <td>{{$blog->title}}</td>
                    <td>{{$blog->description}}</td>
                    <td>{{$blog->status == 1 ? 'Publish' : 'Draft'}}</td>
                    <td>
                        <img src="{{asset($blog->image)}}" alt="" width="80" height="80">
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
