<?php 

class PartecipazioneStage extends Eloquent {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'partecipazione_stage';

	

	public function periodi(){
		return $this->hasMany("Periodo", "partecipazione_stage_id");
	}

}
