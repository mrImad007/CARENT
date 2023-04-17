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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('car_image');
            $table->string('car_make');
            $table->string('car_model');
            $table->string('car_production_year');
            $table->string('car_engine');
            $table->string('car_power');
            $table->string('car_doors');
            $table->string('car_price');
            $table->string('description');
            $table->string('car_category');
            $table->foreignId('typeoffers_id')->constrained("typeoffers")->onDelete('cascade')->onUpdate('cascade');
            $table->integer('period')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
