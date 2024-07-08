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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('password');
            $table->string('email')->unique();
            $table->string('photo');
            $table->date('birth_date');
            $table->integer('height');
            $table->boolean("gender");
            $table->string('trainer_name');
            $table->string('notes');
            $table->unsignedBigInteger('club_id');
            $table->date('sub_expiry_date');
            $table->date('join_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
