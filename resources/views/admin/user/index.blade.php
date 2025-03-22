@extends('layouts.master')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <a href="{{ route('admin.users.create') }}" class="btn btn-info float-sm-right mt-4"><i
                                    class="fa fa-plus"></i> New User</a>
                            <h5 class="card-title">User List</h5> <br>
                            <table class="table table-bordered datatable">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>User Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Super Admin</td>
                                        <td>
                                            <a class="btn text-black" href="#"><i class='fas fa-edit'></i></a>
                                            <a class="btn text-black" href="#"><i class='fas fa-trash'></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Admin</td>
                                        <td>
                                            <a class="btn text-black" href="#"><i class='fas fa-edit'></i></a>
                                            <a class="btn text-black" href="#"><i class='fas fa-trash'></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>User</td>
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
@endsection
