<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create("borrowings", function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained()->onDelete("cascade"); // Member who borrowed
            $table
                ->foreignId("book_copy_id")
                ->constrained()
                ->onDelete("cascade");
            $table->timestamp("borrowed_at");
            $table->timestamp("due_date");
            $table->timestamp("returned_at")->nullable();
            $table
                ->enum("status", ["active", "returned", "overdue", "lost"])
                ->default("active");
            $table->text("notes")->nullable(); // Notes by librarian during borrowing
            $table->foreignId("issued_by")->constrained("users"); // Librarian who issued
            $table->foreignId("returned_to")->nullable()->constrained("users"); // Librarian who received return
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists("borrowings");
    }
};
