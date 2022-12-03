@extends('admin.master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="card">
                <table class="table table-bordered">
                    <thead class="text-center">
                    <tr>
                        <th>SL </th>
                        <th>Product ID </th>
                        <th>Product Name </th>
                        <th>Permations</th>
                    </tr>
                    </thead>
                    <tboady>


                        <tr>
                            <td>1</td>
                            <td>#4544</td>
                            <td>helllo</td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault"> Active </label>
                                </div>

                            </td>
                        </tr>


                    </tboady>
                </table>
            </div>
        </div>
    </section>
@endsection
