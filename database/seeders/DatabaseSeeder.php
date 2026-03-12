<?php

namespace Database\Seeders;

use App\Models\Classes;
use App\Models\SchoolClass;
use App\Models\Staff;
use App\Models\Teams;
use Database\Factories\ClassesFactory;
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
        Staff::factory(5)->create();
        Classes::factory(10)->create();
    }
}
