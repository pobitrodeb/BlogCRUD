@extends('admin.master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="card">
                <div class="card-header">Create A New Blog  </div>
                <div class="card-body">
                    <form action="{{route('new.blog')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <div class="col-md-3">Blog Title  </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="title" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-3">Blog</div>
                            <div class="col-md-9">
                                <textarea id="summernote" cols="30" rows="10" name="blog"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-3">Image</div>
                            <div class="col-md-9">
                                <input type="file" class="form-control-file" name="image">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-3"></div>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-primary w-100" value="Create New blog">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
