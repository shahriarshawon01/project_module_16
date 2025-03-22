@extends('layouts.master')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <a href="{{ route('admin.roles.create') }}" class="btn btn-info float-sm-right mt-4"><i
                                    class="fa fa-plus"></i> New Role</a>
                            <h5 class="card-title">Role List</h5> <br>
                            <table class="table table-bordered datatable">
                                <thead>
                                    <tr>
                                        <th width="4%">SL</th>
                                        <th width="13%">Role Name</th>
                                        <th width="70%">Has Permissions</th>
                                        <th width="13%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($roles)
                                        @foreach ($roles as $key => $role)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $role->name ?? '' }}</td>
                                                <td>
                                                    @foreach ($role->permissions as $parm)
                                                        <span class="badge badge-info mr-1">
                                                            {{ $parm->name ? : '' }}
                                                        </span>
                                                    @endforeach
                                                </td>
                                                <td>
                                                    <a class="btn text-black"
                                                        href="{{ route('admin.roles.edit', $role->id) }}"><i
                                                            class='fas fa-edit'></i></a>
                                                    <a class="btn text-black"
                                                        href="{{ route('admin.roles.destroy', $role->id) }}"
                                                        onclick="event.preventDefault(); document.getElementById('delete-form-{{ $role->id }}').submit();">
                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                    </a>
                                                    <form id="delete-form-{{ $role->id }}" action="{{ route('admin.roles.destroy', $role->id) }}" method="POST" style="display: none;">
                                                        @method('DELETE')
                                                        @csrf
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
