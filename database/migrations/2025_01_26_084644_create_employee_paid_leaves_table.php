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

        Schema::create('employee_paid_leaves', function (Blueprint $table) {
            $table->id();
            $table->foreignId('placement_id')->constrained();
            $table->date('date');
            $table->time('time');
            $table->foreignId('option')->constrained('employees_leave_option');
            $table->text('reason');
            $table->boolean('approved_by_admin')->nullable();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_paid_leaves');
    }
};
