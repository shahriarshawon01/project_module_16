<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolesController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('admin.role.index', compact('roles'));
    }
    public function create()
    {
        $all_permissions = Permission::all();
        $permission_groups = User::getPermissionGroups();
        return view('admin.role.create', compact('all_permissions', 'permission_groups'));
    }
    public function store(Request $request)
    {
        // Validation Data
        $request->validate([
            'name' => 'required|max:100|unique:roles'
        ], [
            'name.requried' => 'Please give a role name'
        ]);
        // Process Data
        $role = Role::create(['name' => $request->name]);
        $permissions = $request->input('permissions');
        if (!empty($permissions)) {
            $role->syncPermissions($permissions);
        }
        flash('Role Created Successfully')->success();
        return redirect(route('admin.roles.index'));
    }
    public function show($id)
    {
    }
    public function edit($id)
    {
        $role = Role::findById($id);
        $all_permissions = Permission::all();
        $permission_groups = User::getPermissionGroups();
        return view('admin.role.edit', compact('role', 'all_permissions', 'permission_groups'));
    }
    public function update(Request $request, $id)
    {
        // Validation Data
        $request->validate([
            'name' => 'required|max:100|unique:roles,name,' .$id
        ], [
            'name.requried' => 'Please give a role name'
        ]);
        // Process Data
        $role = Role::findById($id);
        $permissions = $request->input('permissions');
        if (!empty($permissions)) {
            $role->name = $request->name;
            $role->save();
            $role->syncPermissions($permissions);
        }
        flash('Role Updated Successfully')->success();
        return redirect(route('admin.roles.index'));
    }
    public function destroy($id)
    {
        $role = Role::findById($id);
        if (!is_null($role)) {
            $role->delete();
        }
        flash('Role Deleted Successfully')->success();
        return redirect(route('admin.roles.index'));
    }
}
