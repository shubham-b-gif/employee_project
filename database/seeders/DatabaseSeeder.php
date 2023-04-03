<?php

namespace Database\Seeders;
use App\Models\Job;
use App\Models\Location;
use App\Models\Region;
use App\Models\Dependent;
use App\Models\Employee;
use App\Models\Department;
use App\Models\Countrie;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            // Job::factory(5)->has(
            //     Employee::factory()->has(
            //         Department::factory()->count(6)
            //         )->count(10)
            // )->create();
            // Employee::factory(10)->has(Job::factory()->count(6))->has(Job::factory()->count(6))->create();
            // Department::factory(5)->create();
            // Job::factory(6)->create();
            // Countrie::factory(5)->create();
            Region::factory(2)->has(
                Countrie::factory()->has(
                    Location::factory()->has(
                        Department::factory()->has(
                            Job::factory()->has(
                                Employee::factory()->has(
                                    Dependent::factory()->count(5)
                                )->count(2)
                            )->count(2)
                        )->count(2)
                    )->count(2)
                    )->count(2)
            )->create();
            // Region::factory(6)->has(
            //     Countrie::factory()->has(
            //         Location::factory()->count(5)
            //     )
            // )->create();
            
    }
}
