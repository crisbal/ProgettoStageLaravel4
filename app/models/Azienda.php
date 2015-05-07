<?php 

class Azienda extends Eloquent {


	protected $table = 'aziende';

	public function tutorAzienda(){

		return $this->belongsTo('TutorAzienda', "tutor_azienda_id");

	}

	public function rappresentanteLegale(){

		return $this->belongsTo('RappresentanteLegale', "rappresentante_legale_id");

	}

	public function stages(){

		return $this->hasMany('Stage');

	}
}