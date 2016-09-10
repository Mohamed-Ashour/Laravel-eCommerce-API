<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = "Admin";
        $user->email = "admin@admin.com";
        $user->password = Hash::make("password");
        $user->save();

        $role = new \App\Role();
        $role->name = "admin";
        $role->save();
        $user->assignRole('admin');

        $role = new \App\Category();
        $role->name = "Misc";
        $role->save();

    }
}
