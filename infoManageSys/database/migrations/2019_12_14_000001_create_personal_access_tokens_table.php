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
        Schema::create('personal_access_tokens', function (Blueprint $table) {
            $table->id('studentID')->primary();
            $table->morphs('tokenable');
            $table->string('firstName');
            $table->string('middleName')->nullable();
            $table->string('lastName');
            $table->string('suffix')->nullable();
            $table->date('birthDate');
            $table->string('birthPlace');
            $table->integer('age');
            $table->string('gender');
            $table->string('status');
            $table->string('nationality');
            $table->text('address');
            $table->string('medicalCondition')->nullable();
            $table->string('email')->unique();
            $table->integer('dateAccepted');
            $table->integer('dateGraduated')->nullable();
            $table->text('abilities')->nullable();
            $table->timestamp('last_used_at')->nullable();
            $table->timestamp('expires_at')->nullable();
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_access_tokens');
    }
};
