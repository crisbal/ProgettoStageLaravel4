<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTutorScuola extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
    {
        Schema::create('tutorScuola', function($table)
        {
            $table->increments('id');

            $table->string('nome');
            $table->string('cognome');
            $table->string('telefono')->nullable;        
            $table->string('cellulare')->nullable;       
            $table->string('email')->nullable;        

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
        Schema::drop('tutorScuola');
    }

}
