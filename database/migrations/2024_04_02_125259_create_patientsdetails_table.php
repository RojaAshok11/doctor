<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Doctordetails\Medicaldetails\Doccreateds;
use App\Models\Doctordetails\Medicaldetails\Appointmentmodel;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('patientsdetails', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Doccreateds::class);
            $table->date('date');
            $table->foreignIdFor(Appointmentmodel::class);
            $table->string('appointmenttime');
            $table->string('full_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('specialist')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patientsdetails');
    }
};
