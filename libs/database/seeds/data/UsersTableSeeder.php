<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $admin = new User();
        $admin->name = 'amir';
        $admin->email = 'amir@gmail.com';
        $admin->password = bcrypt('987654321');
        $admin->save();
        $role = Role::findByName('full_admin');
        $admin->assignRole($role);
        $website_admin = new User();
        $website_admin->name = 'mohamad';
        $website_admin->email = 'mohamad@gmail.com';
        $website_admin->password = bcrypt('987654321');
        $website_admin->save();
        $role = Role::findByName('website_admin');
        $website_admin->assignRole($role);
        factory(App\User::class, 100)->create();
    }
}
