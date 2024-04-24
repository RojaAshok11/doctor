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
        Schema::create('doccreateds', function (Blueprint $table) {
            $table->id();

            $table->string('doctorName');
            $table->string('specialist')->nullable();
            $table->integer('doctor_id')->unique();
            $table->string('email')->unique();
            $table->string('phone')->nullable(); // Change the data type to string
            $table->string('gender')->nullable();
            $table->string('address')->nullable();
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doccreateds');
    }
};
