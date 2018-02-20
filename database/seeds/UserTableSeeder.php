<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $role_capture = Role::where('name', 'capture')->first();
        $role_admin = Role::where('name', 'admin')->first();

        $user = new User();
        $user->name = 'Capturista';
        $user->username = 'capturista';
        $user->email = 'capture@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_capture);

        $user = new User();
        $user->name = 'Administrador';
        $user->username = 'admin';
        $user->email = 'admin@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_admin);
    }
}
