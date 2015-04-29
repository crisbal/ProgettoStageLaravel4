<?php

class StageController extends BaseController {

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$stages = Stage::all();
		
    	return  View::make("progetto/listaStage")->with("stages",$stages);
	}


	public function mostraStage($id){
		$stage = Stage::find($id);

		return  View::make("progetto/dettagliStage")->with("stage",$stage);
	}


	public function mostraNuovoProgetto(){
		$aziende = Azienda::all();
		$studenti = Studente::orderBy('classe_id')->get();
		$tutors = TutorScuola::all();
		return  View::make("progetto/nuovoProgetto")->with("aziende",$aziende)->with("studenti",$studenti)->with("tutors",$tutors);
	}
}
