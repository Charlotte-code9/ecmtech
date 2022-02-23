<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\Types\Null_;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userRole = config('roles.models.role')::where('name', '=', 'User')->first();
        $adminRole = config('roles.models.role')::where('name', '=', 'Admin')->first();
        // $permissions = config('roles.models.permission')::all();

        /*
         * Add Users
         *
         */
        if (config('roles.models.defaultUser')::where('email', '=', 'admin@admin.com')->first() === null) {
            $newUser = config('roles.models.defaultUser')::create([
                'name'     => 'Admin',
                'email'    => 'admin@admin.com',
                'password' => bcrypt('admin'),

            ]);

            $newUser->attachRole($adminRole);
            // foreach ($permissions as $permission) {
            //     $newUser->attachPermission($permission);
            // }
        }

        if (config('roles.models.defaultUser')::where('email', '=', 'firstuser@gmail.com')->first() === null) {
            $newUser = config('roles.models.defaultUser')::create([
                'name'     => 'Charlotte Medalla',
                'email'    => 'firstuser@gmail.com',
                'category' => 'student',
                'password' => bcrypt('user'),
            ]);

            $newUser->attachRole($userRole);
        }
    }
}
