<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // $this->call(PermissionsTableSeeder::class);

        // Protect pages using only
        // 1 - By Role
        // 2 - By Level

        $this->call(RolesTableSeeder::class);
        // $this->call(ConnectRelationshipsSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
