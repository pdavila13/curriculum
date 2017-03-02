<?php

namespace Scool\Curriculum\Database\Seeds;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class StudyPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'browse studies']);
        Permission::create(['name' => 'read studies']);
        Permission::create(['name' => 'edit studies']);
        Permission::create(['name' => 'add studies']);
        Permission::create(['name' => 'delete studies']);
        $role = Role::create(['name' => 'manage studies']);
        $role->givePermissionTo('browse studies');
        $role->givePermissionTo('read studies');
        $role->givePermissionTo('edit studies');
        $role->givePermissionTo('add studies');
        $role->givePermissionTo('delete studies');
    }
}
