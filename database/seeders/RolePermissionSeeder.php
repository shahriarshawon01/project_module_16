<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        // Create Role
        $roleSuperAdmin = Role::create(['name' => 'superadmin']);
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleUser = Role::create(['name' => 'user']);
        // Create Permission List
        $permissions = [
            [
                'group_name' => 'admin',
                'permissions' => [
                    'admin.create',
                    'admin.view',
                    'admin.edit',
                    'admin.delete',
                ]
            ],
            [
                'group_name' => 'category ',
                'permissions' => [
                    'category .create',
                    'category .view',
                    'category .edit',
                    'category .delete',
                ]
            ],
            [
                'group_name' => 'product ',
                'permissions' => [
                    'product .create',
                    'product .view',
                    'product .edit',
                    'product .delete',
                ]
            ],
            [
                'group_name' => 'invoice ',
                'permissions' => [
                    'invoice .create',
                    'invoice .view',
                    'invoice .edit',
                    'invoice .delete',
                ]
            ],
            [
                'group_name' => 'role',
                'permissions' => [
                    'role.create',
                    'role.view',
                    'role.edit',
                    'role.delete',
                ]
            ],
            [
                'group_name' => 'permission',
                'permissions' => [
                    'permission.create',
                    'permission.view',
                    'permission.edit',
                    'permission.delete',
                ]
            ],
            [
                'group_name' => 'profile',
                'permissions' => [
                    'profile.view',
                    'profile.edit',
                    'profile.delete',
                ]
            ],
            [
                'group_name' => 'report',
                'permissions' => [
                    'daily.report',
                    'weekly.report',
                    'monthly.report',
                    'yearly.report',
                ]
            ],
        ];
        // Create and Assigning Permission
        for ($i = 0; $i < count($permissions); $i++) {
            $permissionGroup = $permissions[$i]['group_name'];
            for ($j = 0; $j < count($permissions[$i]['permissions']); $j++) {
                $permission = Permission::create(['name' => $permissions[$i]['permissions'][$j], 'group_name' => $permissionGroup]);
                $roleSuperAdmin->givePermissionTo($permission);
                $permission->assignRole($roleSuperAdmin);
            }
        }
    }
}
