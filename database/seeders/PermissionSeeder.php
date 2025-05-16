<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::updateOrCreate(
            [
                'name' => 'admin'
            ],
            ['name' => 'admin']
        );
        $role_pegawai = Role::updateOrCreate(
            [
                'name' => 'pegawai'
            ],
            ['name' => 'pegawai']
        );

        $permission = Permission::updateOrCreate(
            [
                'name' => 'view_dashboard',
            ],
            ['name' => 'view_dashboard']
        );

        $permission1 = Permission::updateOrCreate(
            [
                'name' => 'view_admin',
            ],
            ['name' => 'view_admin']
        );

        $permission2 = Permission::updateOrCreate(
            [
                'name' => 'view_pegawai',
            ],
            ['name' => 'view_pegawai']
        );

        $role_admin->givePermissionTo($permission);
        $role_admin->givePermissionTo($permission1);
        $role_admin->givePermissionTo($permission2);

        $user = User::find(1);

        $user->assignRole(['admin', 'pegawai']);
    }
}
