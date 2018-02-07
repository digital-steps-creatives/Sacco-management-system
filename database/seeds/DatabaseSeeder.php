<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        factory(App\Member::class, 5)->create();
        // $this->call(UsersTableSeeder::class);
    }
}
