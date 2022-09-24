<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'administrator']);
        $role->givePermissionTo('users_manage'); 
        $role = Role::create(['name' => 'user']);
        $role->givePermissionTo('users_use');
        $role = Role::create(['name' => 'enseignant']);
        $role->givePermissionTo('users_use','manage_docs');
    }
}
