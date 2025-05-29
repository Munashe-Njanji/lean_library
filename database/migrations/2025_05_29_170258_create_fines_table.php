<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create("fines", function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId("borrowing_id")
                ->constrained()
                ->onDelete("cascade");
            $table->decimal("amount", 8, 2);
            $table->enum("type", ["overdue", "damage", "lost"]);
            $table->text("description");
            $table
                ->enum("status", ["pending", "paid", "waived"])
                ->default("pending");
            $table->timestamp("paid_at")->nullable();
            $table->text("payment_details")->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists("fines");
    }
};
