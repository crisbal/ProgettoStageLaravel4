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
		$classi = Classe::all();

		return View::make("studente/modificaStudente")->with("studente",$studente)->with("classi",$classi);
	}

	public function faiModificaStudente($id){

			$studente = Studente::find($id);

			$nome = Input::get('nome');
			$matricola = Input::get('matricola');
			$dataNascita = Input::get('dataNascita');
			$indirizzo = Input::get('indirizzo');
			$articolazione = Input::get('articolazione');

			$cognome = Input::get('cognome');
			$CF = Input::get('CF');
			$comuneNascita = Input::get('comuneNascita');
			$comuneResidenza = Input::get('comuneResidenza');

			$id_classe = Input::get('classe');


			$studente->nome = $nome;
			$studente->matricola = $matricola;
			$studente->dataNascita = $dataNascita;
			$studente->indirizzo = $indirizzo;
			$studente->articolazione = $articolazione;

			$studente->cognome = $cognome;
			$studente->CF = $CF;
			$studente->comuneNascita = $comuneNascita;
			$studente->comuneResidenza = $comuneResidenza;
			$studente->classe_id = $id_classe;
			$studente->save();

			return Redirect::action("StudentiController@mostraSpecifico", array($studente->id));
	}

}
