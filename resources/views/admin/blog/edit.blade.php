@extends('admin.master')

@section('title')
    Edit Blog
@endsection

@section('body')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Blog</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit Blog</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <a href="{{route('blogs.index')}}" class="btn btn-primary float-end">Manage Blog</a>
            </div>
            <div class="card-body">
                <form action="{{route('blogs.update',$blog->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="">Title</label>
                                <input type="text" name="title" value="{{$blog->title}}" class="form-control">
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Description</label>
                                <textarea name="description" id="description" rows="3" class="form-control">{!! $blog->description !!}</textarea>
                            </div>
                            <input type="submit" class="btn btn-success" value="Update">

                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="">Image</label>
                                <input type="file" name="image" class="form-control" accept="image/*">
                                <img src="{{asset($blog->image)}}" alt="" width="100" class="mt-2">
                            </div>

                            <div class="form-group mb-2">
                                <label for="">Feature Image</label>
                                <input type="file" name="feature_image[]" class="form-control" accept="image/*" multiple>

                                @foreach(explode('|',$blog->feature_image) as $file)
                                <img src="{{asset($file)}}" alt="" width="100" class="mt-2">
                                @endforeach
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Status</label>
                                <label for=""><input type="radio"  name="status" value="1" checked>Published</label>
                                <label for=""><input type="radio" name="status" value="0" >Unpublished</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        CKEDITOR.replace( 'description' );
    </script>
@endsection

