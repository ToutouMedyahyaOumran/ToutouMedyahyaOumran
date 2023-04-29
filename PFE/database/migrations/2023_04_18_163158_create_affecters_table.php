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
        Schema::create('affecters', function (Blueprint $table) {
            $table->id();
            $table->integer('Date');

            $table->timestamps();

            // $table->integer('service_id');
            $table->unsignedBigInteger('agent_id');

            $table->foreign('agent_id')->references('id')->on('agents')->onDelete('cascade');
         
           // $table->integer('visiteur_id');
            $table->unsignedBigInteger('admin_id');

            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('affecters');
    }
};
