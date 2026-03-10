<?php

namespace Database\Seeders;

use App\Models\SchoolClass;
use App\Models\Teams;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Teams::factory(10)->create()->each(function ($team) {
            SchoolClass::factory(1)->create([
                'team_id' => $team->id,
            ]);
        });

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
    }
}
