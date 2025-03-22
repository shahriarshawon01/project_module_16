@extends('layouts.master')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <button class="btn btn-info float-sm-right mt-4" type="button" class="btn btn-primary"
                                data-bs-toggle="modal" data-bs-target="#myModal">
                                New Category
                            </button>
                            <h5 class="card-title">Category List</h5> <br>
                            <table class="table table-bordered datatable">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Category Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>HP</td>
                                        <td>
                                            <a class="btn text-black" href="#"><i class='fas fa-edit'></i></a>
                                            <a class="btn text-black" href="#"><i class='fas fa-trash'></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Dell</td>
                                        <td>
                                            <a class="btn text-black" href="#"><i class='fas fa-edit'></i></a>
                                            <a class="btn text-black" href="#"><i class='fas fa-trash'></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Employee</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">

                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
@endsection
