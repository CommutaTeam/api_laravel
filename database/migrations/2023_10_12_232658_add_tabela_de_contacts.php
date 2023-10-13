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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        Schema::table('contacts', function (Blueprint $table) {
            $table->unsignedBigInteger('first_user_id');
            $table->foreign('first_user_id')->references('id')->on('users');

            $table->unsignedBigInteger('second_user_id');
            $table->foreign('second_user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
