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

                $table->integer('rappresentanteLegale_id')->unsigned();
                $table->foreign('rappresentanteLegale_id')->references('id')->on('rappresentantiLegali');
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
            $table->dropForeign('aziende_rappresentanteLegale_id_foreign');
            $table->dropColumn(['referente_id', 'rappresentanteLegale_id']);
        }
        );
    }

}
