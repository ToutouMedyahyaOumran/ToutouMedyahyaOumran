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
        Schema::create('signalers', function (Blueprint $table) {
            $table->id();
            $table->integer('Date');

            $table->timestamps();

            // $table->integer('service_id');
            $table->unsignedBigInteger('temoins_id');

            $table->foreign('temoins_id')->references('id')->on('temoins')->onDelete('cascade');
         
           // $table->integer('visiteur_id');
            $table->unsignedBigInteger('incident_id');

            $table->foreign('incident_id')->references('id')->on('incidents')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('signalers');
    }
};
