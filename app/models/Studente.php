<?php


class Studente extends Eloquent {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'studenti';

	

	public function stages(){

		return $this->belongsToMany('Stage', 'partecipazione_stage');

	}

	public function classe(){
		return $this->belongsTo('Classe');
	}
}
