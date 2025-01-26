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

        Schema::create('presen_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained('data_employees');
            $table->date('date');
            $table->time('time');
            $table->string('latitude');
            $table->string('longitude');
            $table->enum('status', ["masuk","pulang"]);
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presen_logs');
    }
};
