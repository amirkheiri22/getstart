<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            ['name' => 'post-create'],
            ['name' => 'post-edit'],
            ['name' => 'post-delete'],
            ['name' => 'post-show'],
            ['name' => 'post-index'],
            ['name' => 'user-create'],
            ['name' => 'user-edit'],
            ['name' => 'user-delete'],
            ['name' => 'user-show'],
            ['name' => 'user-index'],
        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }
    }
}
