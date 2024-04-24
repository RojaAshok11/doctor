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
        Schema::create('contactuses', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('companyname')->nullable();
            $table->string('email');
            $table->string('phonenumber')->nullable();
            $table->string('address')->nullable();
            $table->double('volume_in_cbm', 10,2)->nullable();
            $table->double('length_in_cm', 10,2)->nullable();
            $table->double('width_in_cm', 10,2)->nullable();
            $table->double('height_in_cm', 10,2)->nullable();
            $table->string('message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contactuses');
    }
};
