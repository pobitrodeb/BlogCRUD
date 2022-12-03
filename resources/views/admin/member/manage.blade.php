@extends('admin.master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="card">
                <table class="table table-bordered">
                    <thead class="text-center">
                    <tr>
                        <th>SL </th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tboady>

                        @foreach($members as $member)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$member->name}}</td>
                            <td>{{$member->email}}</td>
                            <td>{{$member->phone}}</td>
                            <td>
                                <a href="" class="btn btn-primary"> Edit </a>
                                <a href="" class="btn btn-danger"> Delete</a>
                            </td>
                        </tr>
                        @endforeach

                    </tboady>
                </table>
            </div>
        </div>
    </section>
@endsection
