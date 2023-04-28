<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plannings', function (Blueprint $table) {
            $table->id();
            $table->time('heure');
            $table->date('jour');
            $table->timestamps();

             // $table->integer('admin_id');
             $table->unsignedBigInteger('admin_id');
             $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
          
              // $table->integer('agent_id');
              $table->unsignedBigInteger('agent_id');
              $table->foreign('agent_id')->references('id')->on('agents')->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plannings');
    }
}
