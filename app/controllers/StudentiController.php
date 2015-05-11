<?php 

class StudentiController extends BaseController {


	public function mostraSpecifico($id){

		$studente = Studente::find($id);

		return View::make("studente/dettagliStudente")->with("studente",$studente);
	}

	public function mostraStudenti(){

		$classi = Classe::all();
	
		return  View::make("studente/listaStudenti")->with("classi",$classi);
	}

	public function mostraModificaStudente($id){

		$studente = Studente::find($id);

		return View::make("studente/modificaStudente")->with("studente",$studente);
	}

	public function faiModificaStudente($id){

			$studente = Studente::find($id);

			$nome = Input::get('nome');
			$cognome = Input::get('cognome');
			$CF = Input::get('CF');
			$articolazione = Input::get('articolazione');
			$indirizzo = Input::get('indirizzo');
			$comuneResidenza = Input::get('comuneResidenza');
			$dataNascita = Input::get('dataNascita');
			$comuneNascita = Input::get('comuneNascita');

			$studente->nome = $nome;
			$studente->cognome = $cognome;
			$studente->CF = $CF;
			$studente->articolazione = $articolazione;
			$studente->indirizzo = $indirizzo;
			$studente->comuneResidenza = $comuneResidenza;
			$studente->dataNascita = $dataNascita;
			$studente->comuneNascita = $comuneNascita;

			$studente->save();

			return Redirect::action("StudentiController@mostraSpecifico", array($studente->id));
	}

}
