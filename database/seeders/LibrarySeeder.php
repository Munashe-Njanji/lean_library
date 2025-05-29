<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // For transaction

class LibrarySeeder extends Seeder
{
    public function run(): void
    {
        // Optional: Disable foreign key checks for mass insertion if using raw DB facade
        // DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // Author::truncate(); // Optional: Clear tables before seeding
        // Book::truncate();   // Optional: Clear tables before seeding

        $authorsWithBooks = [
            [
                "author" => [
                    "name" => "George Orwell",
                    "birth_date" => "1903-06-25",
                    "death_date" => "1950-01-21",
                    "nationality" => "British",
                    "bio" =>
                        "Eric Arthur Blair, known by his pen name George Orwell, was an English novelist, essayist, journalist and critic.",
                ],
                "books" => [
                    [
                        "title" => "1984",
                        "publication_year" => 1949,
                        "genre" => "Dystopian",
                        "isbn" => "9780451524935",
                    ],
                    [
                        "title" => "Animal Farm",
                        "publication_year" => 1945,
                        "genre" => "Political Satire",
                        "isbn" => "9780451526342",
                    ],
                    [
                        "title" => "Down and Out in Paris and London",
                        "publication_year" => 1933,
                        "genre" => "Memoir",
                        "isbn" => "9780156262241",
                    ],
                ],
            ],
            [
                "author" => [
                    "name" => "Jane Austen",
                    "birth_date" => "1775-12-16",
                    "death_date" => "1817-07-18",
                    "nationality" => "British",
                    "bio" =>
                        "Jane Austen was an English novelist known primarily for her six major novels, which interpret, critique and comment upon the British landed gentry at the end of the 18th century.",
                ],
                "books" => [
                    [
                        "title" => "Pride and Prejudice",
                        "publication_year" => 1813,
                        "genre" => "Romance",
                        "isbn" => "9780141439518",
                    ],
                    [
                        "title" => "Sense and Sensibility",
                        "publication_year" => 1811,
                        "genre" => "Romance",
                        "isbn" => "9780141439662",
                    ],
                    [
                        "title" => "Emma",
                        "publication_year" => 1815,
                        "genre" => "Satire",
                        "isbn" => "9780141439587",
                    ],
                    [
                        "title" => "Persuasion",
                        "publication_year" => 1817,
                        "genre" => "Romance",
                        "isbn" => "9780141439686",
                    ],
                ],
            ],
            [
                "author" => [
                    "name" => "J.K. Rowling",
                    "birth_date" => "1965-07-31",
                    "nationality" => "British",
                    "bio" =>
                        "Joanne Rowling, better known by her pen name J. K. Rowling, is a British author, philanthropist, film producer, television producer, and screenwriter.",
                ],
                "books" => [
                    [
                        "title" => 'Harry Potter and the Philosopher\'s Stone',
                        "publication_year" => 1997,
                        "genre" => "Fantasy",
                        "isbn" => "9780747532699",
                    ],
                    [
                        "title" => "Harry Potter and the Chamber of Secrets",
                        "publication_year" => 1998,
                        "genre" => "Fantasy",
                        "isbn" => "9780747538493",
                    ],
                    [
                        "title" => "Harry Potter and the Prisoner of Azkaban",
                        "publication_year" => 1999,
                        "genre" => "Fantasy",
                        "isbn" => "9780747542155",
                    ],
                    [
                        "title" => "The Casual Vacancy",
                        "publication_year" => 2012,
                        "genre" => "Tragicomedy",
                        "isbn" => "9781408704202",
                    ],
                ],
            ],
            [
                "author" => [
                    "name" => "J.R.R. Tolkien",
                    "birth_date" => "1892-01-03",
                    "death_date" => "1973-09-02",
                    "nationality" => "British",
                    "bio" =>
                        "John Ronald Reuel Tolkien was an English writer, poet, philologist, and academic, best known as the author of the high fantasy works The Hobbit and The Lord of the Rings.",
                ],
                "books" => [
                    [
                        "title" => "The Hobbit",
                        "publication_year" => 1937,
                        "genre" => "Fantasy",
                        "isbn" => "9780547928227",
                    ],
                    [
                        "title" => "The Lord of the Rings",
                        "publication_year" => 1954,
                        "genre" => "Fantasy",
                        "isbn" => "9780618640157",
                    ], // Often published as one, but could be split
                    [
                        "title" => "The Silmarillion",
                        "publication_year" => 1977,
                        "genre" => "Fantasy",
                        "isbn" => "9780618391110",
                    ],
                ],
            ],
            [
                "author" => [
                    "name" => "Stephen King",
                    "birth_date" => "1947-09-21",
                    "nationality" => "American",
                    "bio" =>
                        "Stephen Edwin King is an American author of horror, supernatural fiction, suspense, crime, science-fiction, and fantasy novels.",
                ],
                "books" => [
                    [
                        "title" => "It",
                        "publication_year" => 1986,
                        "genre" => "Horror",
                        "isbn" => "9781501142970",
                    ],
                    [
                        "title" => "The Shining",
                        "publication_year" => 1977,
                        "genre" => "Horror",
                        "isbn" => "9780307743657",
                    ],
                    [
                        "title" => "Carrie",
                        "publication_year" => 1974,
                        "genre" => "Horror",
                        "isbn" => "9780307743671",
                    ],
                    [
                        "title" => "The Stand",
                        "publication_year" => 1978,
                        "genre" => "Post-Apocalyptic",
                        "isbn" => "9780307743688",
                    ],
                ],
            ],
            // Add more authors and their books here!
            [
                "author" => [
                    "name" => "Agatha Christie",
                    "birth_date" => "1890-09-15",
                    "death_date" => "1976-01-12",
                    "nationality" => "British",
                    "bio" =>
                        "Dame Agatha Mary Clarissa Christie, Lady Mallowan, was an English writer known for her sixty-six detective novels and fourteen short story collections.",
                ],
                "books" => [
                    [
                        "title" => "Murder on the Orient Express",
                        "publication_year" => 1934,
                        "genre" => "Mystery",
                        "isbn" => "9780062073501",
                    ],
                    [
                        "title" => "And Then There Were None",
                        "publication_year" => 1939,
                        "genre" => "Mystery",
                        "isbn" => "9780062073488",
                    ],
                    [
                        "title" => "The Murder of Roger Ackroyd",
                        "publication_year" => 1926,
                        "genre" => "Mystery",
                        "isbn" => "9780062073563",
                    ],
                ],
            ],
        ];

        foreach ($authorsWithBooks as $data) {
            // Create author using factory, merging specific data with defaults
            $author = Author::factory()->create($data["author"]);

            foreach ($data["books"] as $bookData) {
                // Create book for this author, merging specific data with defaults
                // The factory will handle the rest (description, pages, etc.)
                Book::factory()
                    ->for($author) // Associates with the created author
                    ->create($bookData);
            }
        }

        // You can also create some random authors with random books
        $this->command->info(
            "Creating 10 additional random authors with 1-5 books each..."
        );
        Author::factory(10)
            ->create()
            ->each(function ($author) {
                Book::factory(rand(1, 5))->for($author)->create();
            });

        // Optional: Re-enable foreign key checks
        // DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $this->command->info("Library seeding completed successfully!");
    }
}
