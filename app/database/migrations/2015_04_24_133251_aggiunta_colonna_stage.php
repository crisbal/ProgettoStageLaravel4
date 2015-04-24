<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AggiuntaColonnaStage extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
    {
        
        Schema::table("stage",function($table)
            {
                $table->integer('azienda_id')->unsigned();
                $table->foreign('azienda_id')->references('id')->on('aziende');

                $table->integer('tutorscuola_id')->unsigned();
                $table->foreign('tutorscuola_id')->references('id')->on('tutorScuola');

                $table->integer('tutorazienda_id')->unsigned();
                $table->foreign('tutorazienda_id')->references('id')->on('tutorAzienda');
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("stage",function($table)
        {
            $table->dropForeign('stage_azienda_id_foreign');
            $table->dropForeign('stage_tutorazienda_id_foreign');
            $table->dropForeign('stage_tutorscuola_id_foreign');
            $table->dropColumn(['azienda_id', 'tutorazienda_id', 'tutorscuola_id']);
        });
    }

}
