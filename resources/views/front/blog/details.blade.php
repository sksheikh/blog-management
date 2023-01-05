@extends('front.master')
@section('title')
    Blog Details
    @endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center my-3">Blog details</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <img src="{{asset($blog->image)}}" alt="" height="400" class="mb-3 card-img-top">
                        <div class="d-flex">
                            @foreach(explode('|',$blog->feature_image) as $file)
                                <img src="{{asset($file)}}" alt="" width="200" class="m-2">
                            @endforeach
                        </div>
                        <div class="card-body">
                            <div class="my-2">
                                <span><strong>Created By:</strong> {{$blog->user->id == $blog->creator_id ? $blog->user->name : ''}}</span>
                                <span><strong>Created Date:</strong> {{$blog->created_at->format('d-m-Y')}}</span>
                            </div>
                            <hr>
                            <h3 class="card-title">{{$blog->title}}</h3>
                            <hr>
                            <p class="card-text">{!! $blog->description !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
