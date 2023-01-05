@extends('admin.master')

@section('title')
    Create Blog
@endsection

@section('body')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Create Blog</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Manage Blog</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <a href="{{route('blogs.index')}}" class="btn btn-primary float-end">Manage Blog</a>
            </div>
            <div class="card-body">
                <form action="{{route('blogs.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="">Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Description</label>
                                <textarea name="description" id="description" rows="3" class="form-control"></textarea>
                            </div>
                            <input type="submit" class="btn btn-success" value="Create">

                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="">Image</label>
                                <input type="file" name="image" class="form-control" accept="image/*">
                            </div>

                            <div class="form-group mb-2">
                                <label for="">Feature Image</label>
                                <input type="file" name="feature_image[]" class="form-control" accept="image/*" multiple>
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

