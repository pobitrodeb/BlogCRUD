@extends('admin.master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="card">
                <table class="table table-bordered">
                    <thead class="text-center">
                    <tr>
                        <th>SL </th>
                        <th>Post ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Comment</th>
                    </tr>
                    </thead>
                    <tboady>
                        @foreach($comments as $comment)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$comment->blog_id}}</td>
                            <td>{{$comment->name}}</td>
                            <td>{{$comment->email}}</td>
                            <td>{{$comment->comment}}</td>

                        </tr>
                        @endforeach
                    </tboady>
                </table>
            </div>
        </div>
    </section>
@endsection
