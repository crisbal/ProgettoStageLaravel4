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
            
            $table->integer('progetto_formativo_id')->unsigned();
            $table->foreign('progetto_formativo_id')->references('id')->on('progettiFormativi');

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
