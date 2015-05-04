<?php


class ExcelController extends BaseController {

	public function riempi()
	{
		$arrayStudenti = Excel::load('classi/4AIT INFORMATICA.xls', function($reader) {
		})->get();

		Eloquent::unguard();
		foreach ($arrayStudenti as $studente) {// aggiungere classe e cap
			Studente::create(['nome' => $studente->nome, 'cognome' => $studente->cognome, 'CF' => $studente->cod_fisc, 'dataNascita' => date('Y-m-d',strtotime(str_replace('/', '-',$studente->datan))), 'comuneNascita' => $studente->com_nasc, 'indirizzo' => $studente->ind_rec, 'comuneResidenza' => $studente->com_rec, 'articolazione' => $studente->articolazione,'classe_id' => '1']);
		}
	}
}