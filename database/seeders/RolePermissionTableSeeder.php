<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // Gán quyền
    public function run(): void
    {
        $adminRole = Role::where('name', 'admin')->first();
        $staffRole = Role::where('name', 'staff')->first();

        $permissions = Permission::all();

        // Admin có tất cả các quyền
        $adminRole->permissions()->sync($permissions);

        // Staff chỉ có quyền quản lý sản phẩm và liên hệ
        $staffPermissions = $permissions->whereIn('name', [
            'manage_products',
            'manage_contacts'
        ]);
        $staffRole->permissions()->sync($staffPermissions);
    }
}
