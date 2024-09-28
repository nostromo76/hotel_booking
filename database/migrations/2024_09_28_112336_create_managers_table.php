<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up(): void
    {
        Schema::create('managers', function (Blueprint $table) {
            $table->id('uid'); // Primary key, you can specify the name if needed
            $table->string('uname'); // Username
            $table->string('upass'); // Password
            $table->string('fullname'); // Full name
            $table->string('uemail')->unique(); // Email (must be unique)
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('managers');
    }
};
