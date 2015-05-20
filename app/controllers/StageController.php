<?php

class StageController extends BaseController {

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$stages = Stage::orderBy('id','DESC')->get();
    	return  View::make("progetto/listaProgetti")->with("stages",$stages);
	}

	public function mostraStage($id){
		$stage = Stage::find($id);
		return  View::make("progetto/dettagliProgetto")->with("stage",$stage);
	}


	public function mostraNuovoProgetto(){
		$aziende = Azienda::all();
		$studenti = Studente::orderBy('classe_id')->get();
		$tutors = TutorScuola::all();
		$config = [];
		$config["dataInizio1"] = AppConfig::where('chiave', '=', 'dataInizio1')->firstOrFail();
		$config["dataFine1"] = AppConfig::where('chiave', '=', 'dataFine1')->firstOrFail();

		$config["dataInizio2"] = AppConfig::where('chiave', '=', 'dataInizio2')->firstOrFail();
		$config["dataFine2"] = AppConfig::where('chiave', '=', 'dataFine2')->firstOrFail();

		$config["dataInizio3"] = AppConfig::where('chiave', '=', 'dataInizio3')->firstOrFail();
		$config["dataFine3"] = AppConfig::where('chiave', '=', 'dataFine3')->firstOrFail();


		return  View::make("progetto/nuovoProgetto")->with("aziende",$aziende)->with("studenti",$studenti)->with("tutors",$tutors)->with('config',$config);
	}

	public function faiNuovoProgetto(){

        $data = json_decode(Input::get('json'),true);

		$stage = new Stage;
		$stage->descrizione = "Generato";
		$stage->azienda_id = $data["azienda"];
		$stage->tutor_scuola_id = $data["tutor"];
        $stage->tipo = $data["tipoStage"];
        $stage->archiviato = false;
		$stage->save();

		$studenti = $data["studenti"];
				
		foreach($studenti as $studente){

			$partecipazioneStage = new PartecipazioneStage;
			$partecipazioneStage->stage_id = $stage->id;
			$partecipazioneStage->studente_id = $studente["idStudente"];
			$partecipazioneStage->save();

			
            for($i=0;$i<count($studente["dateInizio"]);$i++){
                $periodo = new Periodo;
                $periodo->dataInizio = $studente["dateInizio"][$i];
                $periodo->dataFine = $studente["dateFine"][$i];
                $periodo->partecipazione_stage_id = $partecipazioneStage->id;
                $periodo->save();
            }
		}

		return action("StageController@mostraStage",array($stage->id));
	}


	public function faiArchiviaProgetto($id){
		$stage = Stage::find($id);
		$stage->archiviato = true;
		$stage->save();

		DocumentiController::generaConvenzione($id,null);

		$studenti = $stage->studenti;
		foreach ($studenti as $studente) {
			DocumentiController::generaProgettoFormativo($id, $studente->id);
		}

		return action("StageController@mostraStage",array($stage->id));
	}
}
