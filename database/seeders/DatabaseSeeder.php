<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Hospital::factory(20)->create();
        \App\Models\Patient::factory(100)->create();
        User::create([
            'name' => "admin",
            'email' => "admin@admin.com",
            'username' => "admin",
            'password' => bcrypt('admin123'),
        ]);
    }
}