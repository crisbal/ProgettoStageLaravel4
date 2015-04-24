<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AggiuntaColonnaStudente extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
    {
        Schema::table('studenti', function($table)
        {
            $table->integer('classe_id')->unsigned();
            $table->foreign('classe_id')->references('id')->on('classi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('studenti', function($table)
        {
            
            $table->dropForeign('studenti_classe_id_foreign');
            $table->dropColumn('classe_id');
        });
    }

}
