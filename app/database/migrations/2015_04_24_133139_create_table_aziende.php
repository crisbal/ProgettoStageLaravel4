<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAziende extends Migration {

	/**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aziende', function($table)
        {
            $table->increments('id');

            $table->string('pIva');
            $table->string('denominazione');
            $table->string('area');
            $table->string('associazione');
            $table->string('settore');
            $table->string('mensa');
            $table->string('descrizione');
            $table->string('sedeLegale');
            $table->string('citta');
            $table->string('provincia');
            $table->integer('cap');     

            
            
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
        Schema::drop('aziende');
    }

}
