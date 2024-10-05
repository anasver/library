<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name' => 'nour'
        ]);
        Author::create([
            'name' => 'essam'
        ]);
        Author::create([
            'name' => 'anas'
        ]);
    }
}
