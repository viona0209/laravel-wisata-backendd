<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'ADMIN ',
            'email' => 'elisa@fic17.com',
            'password' => Hash::make('admin'),
        ]);

        //category factory 2
        Category::factory(2)->create();
    }
}
