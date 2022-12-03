@extends('admin.master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="card">
                <div class="card-header"> Add Member  </div>
                <div class="card-body">
                    <form action="{{route('new.member.store')}}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-3"> Member Name </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-3">Email Address </div>
                            <div class="col-md-9">
                                <input type="email" class="form-control" name="email" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-3">Mobile Number </div>
                            <div class="col-md-9">
                                <input type="number" class="form-control" name="phone" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3"></div>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="Create New Members">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
