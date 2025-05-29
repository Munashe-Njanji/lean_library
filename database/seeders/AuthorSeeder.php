<?php

namespace Database\Seeders;

use App\Models\Author;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::query()->insert([
            ["name" => "George Orwell"],
            ["name" => "Jane Austen"],
            ["name" => "Charles Dickens"],
            ["name" => "J.K. Rowling"],
            ["name" => "J.R.R. Tolkien"],
        ]);
    }
}
