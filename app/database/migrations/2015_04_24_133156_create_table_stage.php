<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStage extends Migration {

	/**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stage', function($table)
        {
            $table->increments('id');

            $table->string('numero');
            $table->string('descrizione');
            $table->string('tipo');     
            $table->boolean('archiviato');     
            
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
        Schema::drop('stage');
    }

}
