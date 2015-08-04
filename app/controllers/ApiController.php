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


  public function ottieniNumeroConsigliato($tipologia){

      $numero = Stage::where('tipo','=',$tipologia)
                ->where('numero', '<>', 0)
                ->where('archiviato', '=', 0)
                ->orderBy('id', 'desc')->first()["numero"];


      if(is_null($numero))
        $numero = 1;

      return $numero + 1;
  }
}
