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
        Schema::create('clothes', function (Blueprint $table) {
            $table->id();
            $table->string('article');
            $table->string('name');
            $table->integer('type_id');
            $table->integer('gender_id');
            $table->integer('category_id');
            $table->integer('clothes_size_id')->nullable();
            $table->integer('shoes_size_id')->nullable();
            $table->integer('color_id');
            $table->integer('quantity');
            $table->float('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clothes');
    }
};
