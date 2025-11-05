<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("menus", function (Blueprint $table) {
            $table->id();
            $table->string("name", 100);
            $table->text("description");
            $table
                ->foreignId("category_id")
                ->constrained()
                ->onDelete("cascade");
            $table->integer("price");
            $table
                ->enum("status", ["avaible", "unavaible"])
                ->default("avaible");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("menu");
    }
};
