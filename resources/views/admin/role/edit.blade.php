@extends('layouts.master')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h4 class="card-title">Edit Role</h4> <br>
                            <a href="{{ route('admin.roles.index') }}" class="btn btn-info float-sm-right mr-4"><i
                                    class="fa fa-arrow-circle-left"></i> Back</a>
                            <form role="form" action="{{ route('admin.roles.update', $role->id) }}" method="post">
                                @method('PUT')
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="role">Role Name</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            value="{{ $role->name }}" placeholder="Type role name">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif

                                    </div>
                                    <div class="form-group">
                                        <label for="name">Permissions</label>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkPermissionAll"
                                                value="1" {{ App\Models\User::roleHasPermissions($role, $all_permissions) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="checkPermissionAll">All</label>
                                        </div>
                                        <hr>
                                        @php $i = 1; @endphp
                                        @foreach ($permission_groups as $group)
                                            <div class="row">
                                                @php
                                                    $permissions = App\Models\User::getpermissionsByGroupName($group->name);
                                                    $j = 1;
                                                @endphp
                                                <div class="col-3">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="{{ $i }}Management" value="{{ $group->name }}"
                                                            onclick="checkPermissionByGroup('role-{{ $i }}-management-checkbox', this)"
                                                            {{ App\Models\User::roleHasPermissions($role, $permissions) ? 'checked' : '' }}>
                                                        <label class="form-check-label"
                                                            for="checkPermission">{{ $group->name }}</label>
                                                    </div>
                                                </div>

                                                <div class="col-9 role-{{ $i }}-management-checkbox">
                                                    @foreach ($permissions as $permission)
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" 
                                                            onclick="checkSinglePermission('role-{{ $i }}-management-checkbox','{{ $i }}Management',{{ count($permissions) }})"
                                                                name="permissions[]"
                                                                {{ $role->hasPermissionTo($permission->name) ? 'checked' : '' }}
                                                                id="checkPermission{{ $permission->id }}"
                                                                value="{{ $permission->name }}">
                                                            <label class="form-check-label"
                                                                for="checkPermission{{ $permission->id }}">{{ $permission->name }}</label>
                                                        </div>
                                                        @php  $j++; @endphp
                                                    @endforeach
                                                    <br>
                                                </div>

                                            </div>
                                            @php  $i++; @endphp
                                        @endforeach
                                    </div>
                                    <button type="submit" class="btn btn-info float-sm-right"><i class="fa fa-save"></i>
                                        Update Role</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
