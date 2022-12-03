@extends('admin.master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="card">
                <div class="card-header">Product Sale </div>
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-3"> Product ID </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="productId" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-3"> Product Name </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-3"></div>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="Create Sale">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
