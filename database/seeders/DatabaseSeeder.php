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

        \App\Models\User::factory()->create([
            'names' => 'Jean Paul',
            'last_names' => 'Duarte Ibarra',
            'email' => 'jean@gmail.com',
            'password' => 'Password.123',
            'phone' => '1231231231',
            'address' => 'Cúcuta'
        ]);

        \App\Models\User::factory(10)->create();
        \App\Models\Category::factory(10)->create();
        \App\Models\Product::factory(30)->create();
    }
}
