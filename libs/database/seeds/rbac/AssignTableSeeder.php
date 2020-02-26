<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AssignTableSeeder extends Seeder
{
    public function run()
    {
        $admin = Role::findByName('full_admin');
        $admin->givePermissionTo('post-create');
        $admin->givePermissionTo('post-edit');
        $admin->givePermissionTo('post-show');
        $admin->givePermissionTo('post-delete');
        $admin->givePermissionTo('post-index');
        $admin->givePermissionTo('user-create');
        $admin->givePermissionTo('user-edit');
        $admin->givePermissionTo('user-show');
        $admin->givePermissionTo('user-delete');
        $admin->givePermissionTo('user-index');

        $web = Role::findByName('website_admin');
        $web->givePermissionTo('post-create');
        $web->givePermissionTo('post-edit');
        $web->givePermissionTo('post-show');
        $web->givePermissionTo('post-delete');
        $web->givePermissionTo('post-index');

    }
}
