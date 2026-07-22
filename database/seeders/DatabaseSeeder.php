<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Country;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Ids fixos (1=Portugal, 2=Espanha, 3=Franca, 4=Europa) assumidos em
        // JobController, LandingController e config/landings.php.
        foreach (['Portugal', 'Espanha', 'França', 'Europa'] as $name) {
            Country::firstOrCreate(['name' => $name]);
        }
    }
}
