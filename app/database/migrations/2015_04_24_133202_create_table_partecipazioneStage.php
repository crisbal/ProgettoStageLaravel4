<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePartecipazioneStage extends Migration {
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partecipazione_stage', function($table)
        {
            $table->increments('id');
            
            $table->integer('studente_id')->unsigned();
            $table->foreign('studente_id')->references('id')->on('studenti');

            $table->integer('stage_id')->unsigned();
            $table->foreign('stage_id')->references('id')->on('stage');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('partecipazione_stage');
    }

}
