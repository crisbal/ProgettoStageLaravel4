<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePeriodi extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('periodi', function($table)
        {
            $table->increments('id');

            $table->date('dataInizio');
            $table->date('dataFine');
            
            $table->integer('partecipazione_stage_id')->unsigned();
            $table->foreign('partecipazione_stage_id')->references('id')->on('partecipazione_stage');

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
		Schema::drop('periodi');
	}

}
