<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AggiuntaColonnaAzienda extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
    {
        Schema::table("aziende",function($table)
            {
                $table->integer('referente_id')->unsigned();
                $table->foreign('referente_id')->references('id')->on('referenti');

                $table->integer('rappresentante_legale_id')->unsigned();
                $table->foreign('rappresentante_legale_id')->references('id')->on('rappresentantiLegali');

                $table->integer('tutor_azienda_id')->unsigned();
                $table->foreign('tutor_azienda_id')->references('id')->on('tutorAzienda');
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
        Schema::table("aziende",function($table)
        {
            $table->dropForeign('aziende_referente_id_foreign');
            $table->dropForeign('aziende_rappresentante_legale_id_foreign');
            $table->dropForeign('aziende_tutor_azienda_id_foreign');
            $table->dropColumn(['referente_id', 'rappresentante_legale_id', 'tutor_azienda_id']);
        }
        );
    }

}
