<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("books", function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->foreignId("author_id")->constrained()->onDelete("cascade");
            $table->string("isbn")->unique()->nullable();
            $table->integer("publication_year")->nullable();
            $table->string("genre")->nullable();
            $table->text("description")->nullable();
            $table->integer("pages")->nullable();
            $table->string("publisher")->nullable();
            $table->string("cover_image_url")->nullable();
            $table->string("language", 10)->default("en");
            $table->decimal("price", 8, 2)->nullable();
            $table
                ->enum("status", ["available", "maintenance", "retired"])
                ->default("available"); // Status of the book title itself
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("books");
    }
};
