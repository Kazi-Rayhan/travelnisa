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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('country');
            $table->string('city');
            $table->float('ratting')->nullable();
            $table->json('images');
            $table->string('summary');
            $table->text('description');
            $table->json('attributes');
            $table->text('address')->nullable();
            $table->string('property_type');
            $table->string('hotel_class');
            $table->string('hotel_style');
            $table->string('affiliate_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};

