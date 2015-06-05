<?php 

class TutorController extends BaseController {

	public function mostraListaTutor(){

		$tutor = TutorScuola::all();
	
		return  View::make("tutorScuola/listaTutor")->with("tutors",$tutor);
	}

	public function mostraSpecifico($id){

		$tutor = TutorScuola::find($id);

		return View::make("tutorScuola/dettagliTutor")->with("tutor",$tutor);
	}



	public function mostraNuovoTutor(){		
		return View::make("tutorScuola/modificaTutor")->with("modifica", false)->with("tutor", new TutorScuola);
	}

	public function faiNuovoTutor(){
			$tutor = new TutorScuola;

            $nome = Input::get('nome');
            $cognome = Input::get('cognome');
            //$telefono = Input::get('telefono');
            $telefono = 0;
            $cellulare = Input::get('cellulare');
            $email = Input::get('email');

			$tutor->nome = $nome;
			$tutor->cognome = $cognome;
			$tutor->telefono = $telefono;
			$tutor->cellulare = $cellulare;
			$tutor->email = $email;

			$tutor->save();

			return Redirect::action("TutorController@mostraListaTutor", array($tutor->id));
	}



	public function mostraModificaTutor($id){		
		$tutor = TutorScuola::find($id);

		return View::make("tutorScuola/modificaTutor")->with("tutor",$tutor)->with("modifica", true);
	}

	public function faiModificaTutor($id){
			$tutor = TutorScuola::find($id);

            $nome = Input::get('nome');
            $cognome = Input::get('cognome');
            //$telefono = Input::get('telefono');
            $telefono = 0;
            $cellulare = Input::get('cellulare');
            $email = Input::get('email');

			$tutor->nome = $nome;
			$tutor->cognome = $cognome;
			$tutor->telefono = $telefono;
			$tutor->cellulare = $cellulare;
			$tutor->email = $email;

			$tutor->save();

			return Redirect::action("TutorController@mostraListaTutor", array($tutor->id));
	}

/*


	public function modificaAzienda($id){

		$azienda = Azienda::find($id);

		return View::make("azienda/modificaAzienda")->with("azienda",$azienda)->with("modifica", true);
	}

	public function faiModificaAzienda($id){

			$azienda = Azienda::find($id);


            $pIva = Input::get('pIva');
            $CFA = Input::get('CFA');
			$denominazione = Input::get('denominazione');
			$associazione = Input::get('associazione');
			$settore = Input::get('settore');
			$sedeLegale = Input::get('sedeLegale');
			$citta = Input::get('citta');
			$cap = Input::get('cap');
			$telefono = Input::get('telefono');
			$email = Input::get('email');
			$indirizzoSedeTirocinio = Input::get('indirizzoSedeTirocinio');
			$capSedeTirocinio = Input::get('capSedeTirocinio');
			$cittaSedeTirocinio = Input::get('cittaSedeTirocinio');
			$nomeRappresLegale = Input::get('nomeRappresLegale');
			$cognomeRappresLegale = Input::get('cognomeRappresLegale');
			$CFRappresLegale = Input::get('CFRappresLegale');
			$comuneNascitaRappresLegale = Input::get('comuneNascitaRappresLegale');
			$dataNascitaRappresLegale = Input::get('dataNascitaRappresLegale');
			$nomeTutorAziend = Input::get('nomeTutorAziend');
			$cognomeTutorAziend = Input::get('cognomeTutorAziend');

			$azienda->pIva = $pIva;
			$azienda->CFA = $CFA;
			$azienda->denominazione = $denominazione;
			$azienda->associazione = $associazione;
			$azienda->settore = $settore;
			$azienda->sedeLegale = $sedeLegale;
			$azienda->citta = $citta;
			$azienda->cap = $cap;			
			$azienda->telefono = $telefono;
			$azienda->email = $email;
			$azienda->indirizzoSedeTirocinio = $indirizzoSedeTirocinio;
			$azienda->capSedeTirocinio = $capSedeTirocinio;
			$azienda->cittaSedeTirocinio = $cittaSedeTirocinio;
			$azienda->nomeRappresLegale = $nomeRappresLegale;
			$azienda->cognomeRappresLegale = $cognomeRappresLegale;
			$azienda->CFRappresLegale = $CFRappresLegale;
			$azienda->comuneNascitaRappresLegale = $comuneNascitaRappresLegale;
			$azienda->dataNascitaRappresLegale = $dataNascitaRappresLegale;
			$azienda->nomeTutorAziend = $nomeTutorAziend;
			$azienda->cognomeTutorAziend = $cognomeTutorAziend;


			$azienda->save();

			return Redirect::action("AziendeController@mostraSpecifica", array($azienda->id));
	}

	public function mostraNuovaAzienda(){

		return View::make("azienda/modificaAzienda")->with("modifica", false)->with("azienda", new Azienda);
	}
	*/
}