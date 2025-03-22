<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        // $users = User::all();
        // return view('admin.user.index', compact('users'));
        return view('admin.user.index');
    }
    public function create()
    {
        // $roles = Role::all();
        // return view('admin.user.create', compact('roles'));
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        // $user = User::findById($id);
        // $roles = Role::all();
        // return view('admin.role.edit', compact('user', 'roles'));
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        // $user = User::findById($id);
        // if (!is_null($user)) {
        //     $user->delete();
        // }
        // flash('User Deleted Successfully')->success();
        // return redirect(route('admin.users.index'));
    }
}
