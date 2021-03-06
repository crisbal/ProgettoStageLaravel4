<?php 

class AmministrazioneController extends BaseController {


	public function menu(){
		return View::make("amministrazione/menuAmministrazione");
	}


	public function mostraCreaClasse(){

		return View::make("amministrazione/aggiuntaClasse");
	}

	public function faiCreaClasse(){
		if (Input::hasFile('excel'))
		{
			$file = Input::file('excel');
			$date = new DateTime();
			$nomeFile = $file->getClientOriginalName() . $date->getTimestamp();
			$file->move("tmp", $nomeFile);
			$classe = Input::get('classe');
			$articolazione = Input::get('articolazione');
			$sezione = Input::get('sezione');

			$arrayStudenti = Excel::load("tmp/".$nomeFile, function($reader) {
			})->get();

			
			$nuovaClasse = new Classe;
			$nuovaClasse->classe = $classe;
			$nuovaClasse->articolazione = $articolazione;
			$nuovaClasse->sezione = $sezione;
			$nuovaClasse->save();

			Eloquent::unguard();
			foreach ($arrayStudenti as $studente) {// aggiungere classe e cap
				Studente::create(['nome' => $studente->nome, 'cognome' => $studente->cognome, 'CF' => $studente->cod_fisc, 'dataNascita' => date('Y-m-d',strtotime(str_replace('/', '-',$studente->datan))), 'comuneNascita' => $studente->com_nasc, 'indirizzo' => $studente->ind_rec, 'comuneResidenza' => $studente->com_rec, 'articolazione' => $studente->articolazione,'classe_id' => $nuovaClasse->id]);
			}
			return Redirect::action('StudentiController@mostraStudenti');

		} else
		return "Impossibile caricare il file!";
	}

	public function mostraCreaAziende(){

		return View::make("amministrazione/aggiuntaAziende");
	}

	public function faiCreaAziende(){
		if (Input::hasFile('excel'))
		{
			$file = Input::file('excel');
			$file->move("tmp", "aziende");
			
			$arrayAziende = Excel::load("tmp/aziende", function($reader) {
			})->get();


			Eloquent::unguard();
            //return $arrayAziende;  //i nomi delle colonne in minuscolo!
			foreach ($arrayAziende as $azienda) {// aggiungere classe e cap
				Azienda::create(['pIva' => $azienda->piva, 'CFA' => NULL, 'denominazione' => $azienda->denominazione, 'telefono' => $azienda->telefono, 'email' => $azienda->email, 'settore' => $azienda->settore, 'associazione' => $azienda->associazione, 'sedeLegale' => $azienda->sedelegale, 'cap' => $azienda->cap, 'citta' => $azienda->citta, 'indirizzoSedeTirocinio' => $azienda->indirizzosedetirocinio, 'capSedeTirocinio' => $azienda->capsedetirocinio, 'cittaSedeTirocinio' => $azienda->cittasedetirocinio, 'nomeRappresLegale' => $azienda->nomerappreslegale, 'cognomeRappresLegale' => $azienda->cognomerappreslegale, 'CFRappresLegale' => $azienda->cfrappreslegale, 'comuneNascitaRappresLegale' => $azienda->comunenascitarappreslegale, 'dataNascitaRappresLegale' => $azienda->datanascitarappreslegale, 'nomeTutorAziend' => $azienda->nometutoraziend, 'cognomeTutorAziend' => $azienda->cognometutoraziend]);
			}
																																																																																									


			return Redirect::action('AziendeController@mostraAziende');

		} 
        else
		  return "Impossibile caricare il file!";
	}

}