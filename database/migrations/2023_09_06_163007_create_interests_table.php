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
        Schema::create('interests', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        Schema::table('interests', function (Blueprint $table) {
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('cities');

            $table->foreignId('user_id')->constrained();
            $table->foreignId('organization_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interests');
    }
};
