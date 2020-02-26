<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class RolesTableSeeder extends Seeder
{
    use HasRoles;
    public function run()
    {
        $roles = [
            ['name' => 'full_admin'],
            ['name' => 'website_admin'],
            ['name' => 'regular_user'],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
