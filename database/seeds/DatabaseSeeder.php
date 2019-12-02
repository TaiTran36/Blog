<?php

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
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin1@admin.com',
            'password' => bcrypt('WRW*3LVv?]dKF+xG')
        ]);
    }
}
