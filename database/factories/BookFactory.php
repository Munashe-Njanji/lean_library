<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Factory for generating Book model data.
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed> Generated data for a Book.
     */
    public function definition(): array
    {
        return [
            "title" => $this->faker->sentence(3),
            "author_id" => $this->faker->randomNumber(),
            "isbn" => $this->faker->optional()->isbn13(),
            "publication_year" => $this->faker->optional()->year(),
            "genre" => $this->faker->optional()->word(),
            "description" => $this->faker->optional()->paragraph(3),
            "pages" => $this->faker->optional()->numberBetween(50, 1000),
            "publisher" => $this->faker->optional()->company(),
            "cover_image_url" => $this->faker->optional()->imageUrl(),
        ];
    }

    /**
     * Create a specific book instance.
     *
     * @param string      $title           The book's title.
     * @param int         $authorId        The associated author's ID.
     * @param string|null $isbn            The book's ISBN (optional).
     * @param int|null    $publicationYear The publication year (optional).
     * @param string|null $genre           The book's genre (optional).
     * @param string|null $description     A brief description of the book (optional).
     * @param int|null    $pages           The number of pages (optional).
     * @param string|null $publisher       The book's publisher (optional).
     * @param string|null $coverImageUrl   The cover image URL (optional).
     *
     * @return Factory
     */
    public function specificBook(
        string $title,
        int $authorId,
        ?string $isbn = null,
        ?int $publicationYear = null,
        ?string $genre = null,
        ?string $description = null,
        ?int $pages = null,
        ?string $publisher = null,
        ?string $coverImageUrl = null
    ): Factory {
        return $this->state(
            fn(array $attributes) => [
                "title" => $title,
                "author_id" => $authorId,
                "isbn" => $isbn,
                "publication_year" => $publicationYear,
                "genre" => $genre,
                "description" => $description,
                "pages" => $pages,
                "publisher" => $publisher,
                "cover_image_url" => $coverImageUrl,
            ]
        );
    }
}
