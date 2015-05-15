<?php


class Stage extends Eloquent {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'stage';

	
	public function studenti(){
		return $this->belongsToMany('Studente', 'partecipazione_stage');
	}

	public function azienda(){
		return $this->belongsTo("Azienda");
	}

	public function tutorScuola(){
		return $this->belongsTo("TutorScuola", "tutor_scuola_id");
	}


}
