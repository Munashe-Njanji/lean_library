<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create("book_copies", function (Blueprint $table) {
            $table->id();
            $table->foreignId("book_id")->constrained()->onDelete("cascade");
            $table->string("barcode")->unique();
            $table
                ->enum("status", [
                    "available",
                    "borrowed",
                    "reserved",
                    "damaged",
                    "lost",
                    "maintenance",
                ])
                ->default("available");
            $table->text("condition_notes")->nullable();
            $table->date("acquired_date");
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists("book_copies");
    }
};
