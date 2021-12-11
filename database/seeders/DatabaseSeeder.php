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
        $this->call([
            StateSeeder::class,
            LgaSeeder::class,
            SettingsSeeder::class,
            UserSeeder::class,
            CategorySeeder::class,
            TagSeeder::class,
            InsertSQLSeeder::class
        ]);
    }
}
