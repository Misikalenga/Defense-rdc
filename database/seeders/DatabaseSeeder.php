<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Admin Principal',
                'password' => Hash::make('password'),
            ]
        );

        $this->call([
            CategorieSeeder::class,
            ActualiteSeeder::class,
            ProjetSeeder::class,
        ]);
    }
}
