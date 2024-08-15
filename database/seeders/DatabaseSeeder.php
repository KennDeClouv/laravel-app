<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Devision;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Employee::factory(100)->recycle(
            Devision::factory(10)->create()
        )->create();
    }
}
