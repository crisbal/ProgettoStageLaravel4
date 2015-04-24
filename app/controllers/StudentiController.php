<?php 

class StudentiController extends BaseController {


	public function mostraAggiungi()
	{
    	return  View::make("studente/aggiungiStudente");
	}

	public function faiAggiungi(Request $request)
	{

		$v = Validator::make(Request::all(), [
        	'nome' => 'required|min:3',
        	'cognome' => 'required|alpha',
    	]);

    	if ($v->fails())
	    {
	    	$errori = $v->errors();

	        return redirect(action("StudentiController@mostraAggiungi"))->with("errors",$errori);
	    }


    	$nome = Request::input('nome');
    	$cognome = Request::input('cognome');
    	 	

    	$studente = new Studente;

		$studente->nome = $nome;
		$studente->cognome = $cognome;
		$studente->classe = 1;
		$studente->save();

		return redirect(action("StageController@index"))->with("messaggio","Studente Aggiunto!");
	}


	public function mostraSpecifico($id){

		$studente = Studente::find($id);

		return View::make("studente/dettagliStudente")->with("studente",$studente);
	}

	public function mostraStudenti(){

		$classi = Classe::all();
	
		return  View::make("studente/listaStudenti")->with("classi",$classi);
	}

}
