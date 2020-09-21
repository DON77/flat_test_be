<?php

namespace Database\Seeders;

use App\Models\Flat;
use App\Models\User;
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
        User::factory(1)->create([
            "email" => "example1@gmail.com"
        ]);
        User::factory(1)->create([
            "email" => "example2@gmail.com"
        ]);
        Flat::factory(10)->create();
    }
}
