<?php 

class AziendeController extends BaseController {


	public function mostraSpecifica($id){

		$azienda = Azienda::find($id);

		return View::make("azienda/dettagliAzienda")->with("azienda",$azienda);
	}

	public function mostraAziende(){

		$aziende = Azienda::all();
	
		return  View::make("azienda/listaAziende")->with("aziende",$aziende);
	}

	public function modificaAzienda($id){

		$azienda = Azienda::find($id);

		return View::make("azienda/modificaAzienda")->with("azienda",$azienda);
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
}
