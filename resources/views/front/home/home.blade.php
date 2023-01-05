@extends('front.master')
@section('title')
    Home
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row mb-3">
                <div class="col-md-12">
                    <h2 class="text-center">All Blog</h2>
                </div>
            </div>

            <div class="row">
                <!--Start Single Blog-->

                @foreach($blogs as $blog)
                    <div class="col-md-4">
                        <div class="card" style="height: 400">
                            <img src="{{asset($blog->image)}}" alt="" class="card-img-top" height="200">
                            <div class="card-body">
                                <h4 class="card-title">{{Str::limit($blog->title,40)}}</h4>
                                <p class="card-text">{!! \Illuminate\Support\Str::words($blog->description,30) !!}</p>
                                <a href="{{route('blog.details',['id'=>$blog->id])}}" class="btn btn-info">Read More</a>
                            </div>

                        </div>
                    </div>
                @endforeach

                <!--Start Single Blog-->
            </div>

        </div>
    </section>
@endsection
