<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAziende extends Migration {

	/**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aziende', function($table)
        {
            $table->increments('id');

            $table->string('pIva');
            $table->string('CFA')->nullable();
            $table->string('denominazione');
            $table->string('associazione')->nullable();
            $table->string('settore')->nullable();
            $table->string('sedeLegale');
            $table->string('citta');
            $table->string('cap')->nullable();
            $table->string('note')->nullable();
            $table->string('telefono')->nullable();
            $table->string('email')->nullable();
            $table->string('indirizzoSedeTirocinio')->nullable();
            $table->string('capSedeTirocinio')->nullable();
            $table->string('cittaSedeTirocinio')->nullable();
            $table->string('nomeRappresLegale')->nullable();
            $table->string('cognomeRappresLegale')->nullable();
            $table->string('CFRappresLegale')->nullable();
            $table->string('comuneNascitaRappresLegale')->nullable();
            $table->string('dataNascitaRappresLegale')->nullable();
            $table->string('nomeTutorAziend')->nullable();
            $table->string('cognomeTutorAziend')->nullable();

            
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
        Schema::drop('aziende');
    }

}
