<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSignalersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signalers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

             // $table->integer('temoin_id');
             $table->unsignedBigInteger('temoin_id');
             $table->foreign('temoin_id')->references('id')->on('temoins')->onDelete('cascade');
          
              // $table->integer('incident_id');
              $table->unsignedBigInteger('incident_id');
              $table->foreign('incident_id')->references('id')->on('incidents')->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('signalers');
    }
}
