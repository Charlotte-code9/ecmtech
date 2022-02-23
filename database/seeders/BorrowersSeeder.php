<?php

namespace Database\Seeders;

use App\Models\BorrowedItems;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory;

class BorrowersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        // dd($faker);

        $state = [
            'u_category' => 'Student',
            // 'uyear' => $faker->randomElement([
            //     'First Year',
            //     'Second Year',
            //     'Third Year',
            //     'Fourth Year',
            // ]),
            'uyear' => 'First Year',
            'usec' => 'Kamunggay',
            'mobile' => '09158910718',
        ];

        $user = User::factory()
            ->state($state)
            ->create();

        BorrowedItems::create([
            'user_id' => $user->id,
            'bname' => $user->name,
            'bdate' => 'Computer',
            'itemb' => now(),
            'broom' => 'Dancing',
            'bquantity' => 1,
            'returnd' => now()->addDay(1),
        ]);
    }
}
