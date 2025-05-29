<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Seeder;

/**
 * Class BookSeeder
 *
 * Seeds the database with books and their respective authors.
 */
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // Retrieve authors, failing loudly if not found
        $authors = [
            "George Orwell" => Author::query()
                ->where("name", "George Orwell")
                ->firstOrFail(),
            "Charles Dickens" => Author::query()
                ->where("name", "Charles Dickens")
                ->firstOrFail(),
            "J.K. Rowling" => Author::query()
                ->where("name", "J.K. Rowling")
                ->firstOrFail(),
            "J.R.R. Tolkien" => Author::query()
                ->where("name", "J.R.R. Tolkien")
                ->firstOrFail(),
        ];

        // Define books in bulk for efficient insertion
        $books = [
            ["title" => "1984", "author_id" => $authors["George Orwell"]->id],
            [
                "title" => "A Tale of Two Cities",
                "author_id" => $authors["Charles Dickens"]->id,
            ],
            [
                "title" => 'Harry Potter and the Philosopher\'s Stone',
                "author_id" => $authors["J.K. Rowling"]->id,
            ],
            [
                "title" => "The Lord of the Rings",
                "author_id" => $authors["J.R.R. Tolkien"]->id,
            ],
            [
                "title" => "The Hobbit",
                "author_id" => $authors["J.R.R. Tolkien"]->id,
            ],
            [
                "title" => "The Fellowship of the Ring",
                "author_id" => $authors["J.R.R. Tolkien"]->id,
            ],
            [
                "title" => "The Two Towers",
                "author_id" => $authors["J.R.R. Tolkien"]->id,
            ],
            [
                "title" => "The Return of the King",
                "author_id" => $authors["J.R.R. Tolkien"]->id,
            ],
        ];

        // Insert books efficiently in bulk
        Book::query()->insert($books);
    }
}
