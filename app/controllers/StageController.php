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

	public function faiNuovoProgetto(){
		$stage = new Stage;
		$stage->descrizione = "Generato";
		$stage->azienda_id = Input::get('idAzienda');
		$stage->tutorscuola_id = Input::get('idTutor');
		$stage->save();
		$idStudenti = explode(",", Input::get('idStudenti'));
		unset($idStudenti[0]);
		
		foreach($idStudenti as $idStudente){
			$partecipazioneStage = new PartecipazioneStage;
			$partecipazioneStage->stage_id = $stage->id;
			$partecipazioneStage->studente_id = $idStudente;
			$partecipazioneStage->save();
			$partecipazioneStage->push();
		}

	}
}
