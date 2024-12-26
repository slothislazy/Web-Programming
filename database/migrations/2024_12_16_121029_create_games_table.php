<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger("category_id");
            $table->foreign("category_id")->references('id')->on("categories")->onDelete('cascade')->onUpdate('cascade');
            $table->string("title");
            $table->string("developer");
            $table->longText("description")->nullable();
            $table->integer("price");
            $table->date("release_date");
            $table->boolean('featured')->default(false);
            $table->string("image");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
