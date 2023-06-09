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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender');
            $table->integer('age');
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')
                  ->references('id')
                  ->on('countries')
                  ->onDelete('cascade');
            $table->unsignedBigInteger('competition_id');
            $table->foreign('competition_id')
                  ->references('id')
                  ->on('competitions')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
