<?php 

class Classe extends Eloquent {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'classi';


	public function studenti(){
		return $this->hasMany('Studente');
	}

}