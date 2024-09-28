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
            $table->string('roomname'); // Name of the room
            $table->integer('room_qnty'); // Quantity of rooms
            $table->integer('available'); // Available rooms
            $table->integer('booked'); // Booked rooms
            $table->integer('no_bed'); // Number of beds
            $table->string('bedtype'); // Type of bed
            $table->string('facility'); // Room facilities
            $table->decimal('price', 10, 2); // Price of the room
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
