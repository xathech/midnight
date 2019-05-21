<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 49)->create();

        factory(User::class)->create([
            'email' => 'admin@midnight.com',
            'role' => 1,
        ]);

    }
}
