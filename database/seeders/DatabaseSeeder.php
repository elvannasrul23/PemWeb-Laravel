<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);

        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            ProfileSeeder::class,
            GenreSeeder::class,
            MovieSeeder::class,
            CastSeeder::class,
            CastMovieSeeder::class,
            ReviewSeeder::class,
        ]);
    }
}
