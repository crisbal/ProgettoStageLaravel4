<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStudenti extends Migration {

	/**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studenti', function($table)
        {
            $table->increments('id');

            $table->integer('matricola');
            $table->string('nome');
            $table->string('cognome');
            $table->string('CF');
            $table->date('dataNascita');
            $table->string('comuneNascita');
            $table->string('via');
            $table->integer('cap');
            $table->integer('numeroCivico');
            $table->string('comuneResidenza');

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
        Schema::drop('studenti');
    }

}
