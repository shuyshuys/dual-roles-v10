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

        Schema::create('data_employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('education_id')->constrained();
            $table->foreignId('marital_id')->constrained();
            $table->foreignId('gada_id')->constrained();
            $table->enum('sex', ["male","female"]);
            $table->string('phone_number');
            $table->string('birthplace');
            $table->date('birth_date');
            $table->string('address');
            $table->string('mother_name');
            $table->string('body_height');
            $table->string('body_weight');
            $table->integer('kk_number');
            $table->integer('ktp_number');
            $table->string('kta_number');
            $table->string('kta_reg_number');
            $table->string('bpjs_kes');
            $table->string('bpjs_ket');
            $table->string('pkwt_number');
            $table->integer('npwp_number')->nullable();
            $table->integer('ijazah_gada_number')->nullable();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_employees');
    }
};
