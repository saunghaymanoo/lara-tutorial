<?php

namespace Database\Seeders;

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
        $this->call(StudentTableSeeder::class);
        $this->call(ClassTableSeeder::class);
        $this->call(MajorTableSeeder::class);
        $this->call(ParentTableSeeder::class);
        $this->call(YearTableSeeder::class);
    }
}
