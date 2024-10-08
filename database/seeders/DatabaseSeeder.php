<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CountrySeeder::class,
            InsuranceClassSeeder::class,
            EducationLevelSeeder::class,
            DegreeSeeder::class,
            ProjectSeeder::class,
            EmployeeJobSeeder::class,
            EmployeeSeeder::class,
            ContractSeeder::class,
            ProjectAssignmentSeeder::class,
            EmployeeLeaveSeeder::class,
        ]);
    }
}
