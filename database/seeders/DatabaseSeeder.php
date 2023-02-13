<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@demo.test',
            'type' => \App\Models\User::TYPES['BUSINESS'],
            'password' => Hash::make('adminpassword'),
        ]);

        \App\Models\User::create([
            'name' => 'Rhon Stratos',
            'email' => 'rhondytioco@gmail.com',
            'type' => \App\Models\User::TYPES['CLIENT'],
            'password' => Hash::make('adminpassword'),
        ]);
    }
}
