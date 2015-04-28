<?php 

class ApiController extends BaseController {


	public function mostraAzienda($id){

		$azienda = Azienda::find($id);

		return $azienda;
	}
}
