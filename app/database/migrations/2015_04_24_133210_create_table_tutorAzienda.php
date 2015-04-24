<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTutorAzienda extends Migration {

	/**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutorAzienda', function($table)
        {
            $table->increments('id');

            $table->string('nome');
            $table->string('cognome');
            $table->integer('telefono');        
            $table->integer('cellulare');       
            $table->string('email');        

            

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
        Schema::drop('tutorAzienda');
    }

}
