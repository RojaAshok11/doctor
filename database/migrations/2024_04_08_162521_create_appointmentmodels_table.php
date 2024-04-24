<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Doctordetails\Medicaldetails\Doccreateds;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('appointmentmodels', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Doccreateds::class);
            $table->timestamps();
            $table->string('am_time');
            $table->string('pm_time');
            // $table->string('hours');
            // $table->string('minutes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointmentmodels');
    }
};
