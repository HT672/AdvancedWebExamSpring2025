<?php

namespace Database\Seeders;

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
        DB::table('students')->insert([
            'name' => Str::random(30),
            'age' => Int::random(30),
        ]);

        DB::table('courses')->insert([
            'name' => Str::random(10),
            'Description' => Str::random(10),
        ]);
    }
}
