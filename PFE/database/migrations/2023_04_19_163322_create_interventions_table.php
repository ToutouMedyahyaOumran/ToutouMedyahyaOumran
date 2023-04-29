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
        Schema::create('interventions', function (Blueprint $table) {
            $table->id();
            $table->string('type');
         
            $table->timestamps();
            $table->unsignedBigInteger('support_id');

            $table->foreign('support_id')->references('id')->on('supports')->onDelete('cascade');

            $table->unsignedBigInteger('vehicules_id');

            $table->foreign('vehicules_id')->references('id')->on('vehicules')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interventions');
    }
};
