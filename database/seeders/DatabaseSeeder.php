<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //  \App\Models\User::factory(1)->create();
        // \App\Models\Announcement::factory(100)->create();
        \App\Models\User::factory()->create([
            'name' => 'cristian',
            'email' => 'cristian@example.com',
        ]);
    }
}
