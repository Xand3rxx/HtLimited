<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create User for HT limited's SUPER ADMIN
        \App\Models\User::create([
            'name'              => 'HT Limited',
            'email'             => 'info@ht-limitedng.net',
            'password'          => bcrypt('admin12345'),
            // 'password'          => bcrypt('v\@4*mWk'),
            'email_verified_at' => now(),
            'avatar'            => 'blank.png',
        ]);
    }
}
