@extends('website.blog.detail');

@section('reply')

    <div class="col-12">
        <form action="" method="post">
            @csrf

            <input type="hidden" class="form-control" name="blog_id" value="{{$blogPost->id}}">

            <div class="form-group">
                <label for="name">Name *</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="message">Comment *</label>
                <textarea id="message" cols="30" rows="5" class="form-control" name="comment"></textarea>
            </div>

            <div class="form-group">
                <input type="submit" value="Leave Comment" class="btn btn-primary">
            </div>

        </form>
    </div>

@endsection
