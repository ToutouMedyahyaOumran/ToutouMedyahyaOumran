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
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('motPs');
            $table->timestamps();

             // $table->integer('admin_id');
             $table->unsignedBigInteger('admin_id');
             $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
          
            // $table->integer('departement_id');
            $table->unsignedBigInteger('departement_id');
            $table->foreign('departement_id')->references('id')->on('departements')->onDelete('cascade');
       
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agents');
    }
};
