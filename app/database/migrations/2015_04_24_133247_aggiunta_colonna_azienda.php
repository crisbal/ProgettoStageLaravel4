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

                $table->integer('rappresentantelegale_id')->unsigned();
                $table->foreign('rappresentantelegale_id')->references('id')->on('rappresentantiLegali');
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
            $table->dropColumn(['referente_id', 'rappresentantelegale_id']);
        }
        );
    }

}
