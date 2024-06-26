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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $this->call([StudyStatusTableSeeder::class]);
        $this->call([SalaryTypesTableSeeder::class]);
        $this->call([StudyLevelsTableSeeder::class]);
        $this->call([DocumentTypesTableSeeder::class]);
        $this->call([CountriesTableSeeder::class]);
        $this->call([DepartamentsTableSeeder::class]);       
        $this->call([CitiesTableSeeder::class]);
        $this->call([OccupationsTableSeeder::class]);
        $this->call([CompaniesTableSeeders::class]);
        $this->call([ChargeSeeders::class]); 
        $this->call([RolesTableSeeder::class]);
        $this->call([UserTableSeeder::class]);         
        $this->call([InstructorTableSeeder::class]);        
        $this->call([WorkDaysTableSeeder::class]);
        
        
        

    }
}
