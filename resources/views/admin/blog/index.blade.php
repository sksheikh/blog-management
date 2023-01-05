@extends('admin.master')

@section('title')
    Manage Blog
@endsection

@section('body')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Manage Blog</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Manage Blog</li>
        </ol>
        <span class="text-success">{{Session::has('success') ? Session::get('success') : ''}}</span>
        <div class="card mb-4">
            <div class="card-header">
                <a href="{{route('blogs.create')}}" class="btn btn-primary float-end">Create Blog</a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>SL</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($blogs as $blog)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{Str::limit($blog->title,40)}}</td>
                            <td>{!! Str::limit($blog->description,40) !!}</td>
                            <td><img src="{{asset($blog->image)}}" alt="" width="50"></td>
                            <td>{{$blog->status == 1 ? 'Published' : 'Unpublished'}}</td>
                            <td>
                                <a href="{{route('blogs.edit',$blog->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{route('blogs.destroy',$blog->id)}}" method="post" class="d-inline-block" onsubmit="confirm('Are you sure to delete this')">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
