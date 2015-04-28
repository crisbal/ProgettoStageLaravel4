<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AggiuntaColonnaTutorAzienda extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tutorAzienda', function($table)
        {
            $table->integer('azienda_id')->unsigned();
            $table->foreign('azienda_id')->references('id')->on('aziende');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tutorAzienda', function($table)
        {
			$table->dropForeign('tutorAzienda_azienda_id_foreign');
	        $table->dropColumn('azienda_id');
        });
	}

}
