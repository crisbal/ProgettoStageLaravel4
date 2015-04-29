<?php 

class Azienda extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'aziende';

	public function tutorAzienda(){

		return $this->hasOne('TutorAzienda');

	}

	public function rappresentanteLegale(){

		return $this->belongsTo('RappresentanteLegale', "rappresentanteLegale_id");

	}
}