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
            $table->foreignId('hotel_facilitie_id')->constrained('hotel_facilities')->cascadeOnDelete();
            $table->string('name')->nullable();
            $table->string('nameDanish')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->float('ratting')->nullable();
            $table->json('images')->nullable();
            $table->text('address')->nullable();
            $table->boolean('status')->default(0);
            $table->string('property_type')->nullable();
            $table->string('hotel_class')->nullable();
            $table->string('hotel_style')->nullable();
            $table->string('affiliate_link')->nullable();
            $table->json('freeServices')->nullable();
            $table->json('paidServices')->nullable();
            $table->text('summary')->nullable();
            $table->text('about')->nullable();
            $table->text('foodConcept')->nullable();
            $table->text('childrenConcept')->nullable();
            $table->text('beach')->nullable();
            $table->text('honeymoon')->nullable();
            $table->text('generalWarning')->nullable();
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

