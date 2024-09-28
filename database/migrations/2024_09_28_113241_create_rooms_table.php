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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id('room_id'); // Primary key
            $table->string('room_cat'); // Room category
            $table->date('checkin')->nullable(); // Check-in date
            $table->date('checkout')->nullable(); // Check-out date
            $table->string('name'); // Guest name
            $table->string('phone'); // Guest phone number
            $table->boolean('book')->default(false); // Booking status
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
