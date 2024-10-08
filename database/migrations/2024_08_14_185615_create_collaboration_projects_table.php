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
        Schema::create('collaboration_projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('category');
            $table->json('architects')->nullable();
            $table->year('year');           
            $table->string('location');
            $table->text('description')->nullable();
            $table->string('banner');
            $table->string('thumbnail');
            $table->json('images');
            $table->string('client');
            $table->string('slug')->unique();

            $table->unsignedBigInteger('type_id')->nullable();
            $table->timestamps();


            // Foreign key constraint for category_id
            $table->foreign('type_id')->references('id')->on('types')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collaboration_projects');
    }
};
