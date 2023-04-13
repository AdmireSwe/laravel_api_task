<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()
        ->count(5)
        ->hasTask(5)
        ->create();

        \App\Models\User::factory()
        ->count(15)
        ->hasTask(3)
        ->create();

       \App\Models\User::factory()
        ->count(7)
         ->create();
    }
}
