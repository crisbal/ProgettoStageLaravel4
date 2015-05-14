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

			$denominazione = Input::get('denominazione');
			$settore = Input::get('settore');
			$associazione = Input::get('associazione');
			$note = Input::get('note');
			$pIva = Input::get('pIva');
			$sedeLegale = Input::get('sedeLegale');

			$azienda->denominazione = $denominazione;
			$azienda->settore = $settore;
			$azienda->associazione = $associazione;
			$azienda->note = $note;
			$azienda->pIva = $pIva;
			$azienda->sedeLegale = $sedeLegale;

			$azienda->save();

			return Redirect::action("AziendeController@mostraSpecifica", array($azienda->id));
	}
}
