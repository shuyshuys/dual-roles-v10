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
        Schema::disableForeignKeyConstraints();

        Schema::create('placements', function (Blueprint $table) {
            $table->id();
            $table->string('employee_number');
            $table->foreignId('employee_id')->constrained('data_employees');
            $table->foreignId('location_id')->constrained('placementlocations');
            $table->foreignId('position_id')->constrained();
            $table->foreignId('placement_status_id')->constrained();
            $table->foreignId('shift_id')->constrained();
            $table->date('placement_start');
            $table->date('placement_end');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('placements');
    }
};
