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
}
