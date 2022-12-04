@extends('website.master')

@section('blog1')
    <!-- Blog List Start -->
    <div class="container bg-white pt-5">
        @foreach($blogs as $blog)
        <div class="row blog-item px-3 pb-5">
            <div class="col-md-5">
                <img class="img-fluid mb-4 mb-md-0" src="{{asset($blog->image)}}" alt="Image">
            </div>
            <div class="col-md-7">
                <h3 class="mt-md-4 px-md-3 mb-2 py-2 bg-white font-weight-bold">{{$blog->title}}</h3>
                <div class="d-flex mb-3">
                    <small class="mr-2 text-muted"><i class="fa fa-calendar-alt"></i> {{$blog->updated_at->diffForHumans()}}</small>
                    <small class="mr-2 text-muted"><i class="fa fa-folder"></i>  Category</small>
                    <small class="mr-2 text-muted"><i class="fa fa-comments"></i> {{count($blog->all())}}</small>

                    <form action="{{route('newReaction')}}" id="like" method="post" hidden>
                        @csrf
                        <input type="hidden" name="blog_id" value="{{$blog->id}}">


                        <input type="submit" value="1" name="submit"/>
                    </form>
                    <button onclick="document.getElementById('like').submit();"><i class="fa fa-solid fa-heart"></i></button>

                </div>
                <p>
                   {!! $blog->blog !!}
                </p>
                <a class="btn btn-link p-0" href="{{route('blog.detail',['id' => $blog->id])}}">Read More <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        @endforeach
    </div>
    <!-- Blog List End -->
@endsection
