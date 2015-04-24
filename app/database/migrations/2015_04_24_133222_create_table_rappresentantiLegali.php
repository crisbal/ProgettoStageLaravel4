<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRappresentantiLegali extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
    {
        Schema::create('rappresentantiLegali', function($table)
        {
            $table->increments('id');

            $table->string('cf');
            $table->string('nome');
            $table->string('cognome');
            $table->date('dataN');
            $table->string('luogoN');
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
        Schema::drop('rappresentantiLegali');
    }

}
