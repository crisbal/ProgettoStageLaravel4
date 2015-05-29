<?php 

class ApiController extends BaseController {


	public function mostraAzienda($id){

		$azienda = Azienda::find($id);

		return $azienda;
	}

	public function mostraTutor($id){

		$tutor = TutorScuola::find($id);

		return $tutor;
	}

    public function mostraStudente($id){

        $studente = Studente::find($id);

        return $studente;
    }
}
