<?php 

class DocumentiController extends BaseController {



	/*Convenzioni*/
	public function faiDownloadConvenzione($stageId,$studenteId){
		$stage = Stage::find($stageId);

		if($stage->archiviato)
			return Response::download('public/documenti/' . $stage->id . '/convenzione.docx');
		else
			$nomeFile = $this->generaConvenzione($stageId,$studenteId);
		
		return Response::download($nomeFile);
	}

	public function generaConvenzione($stageId,$studenteId){
		$stage = Stage::find($stageId);
		$tipo = $stage->tipo;

		$nomeFile;

		if(strpos($tipo,'Alternanza') !== false){
			//Alternanza
			$nomeFile = $this->generaConvenzioneAlternanza($stageId, $studenteId);
		}

		if(strpos($tipo,'Stage') !== false){
			//Stage
			$nomeFile = $this->generaConvenzioneStage($stageId, $studenteId);
		}

		return $nomeFile;
	}

	public function generaConvenzioneAlternanza($stageId, $studenteId){
		$stage = Stage::find($stageId);

		$azienda = $stage->azienda;

		$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('documenti/modelli/alternanza/convenzione.docx');
		//----------------------------STAGE
		$templateProcessor->setValue('id_stage', htmlspecialchars($stageId));
	    $templateProcessor->setValue('data_stage', htmlspecialchars($stage->created_at));
	    //----------------------------AZIENDA
		$templateProcessor->setValue('azienda_denominazione', htmlspecialchars($azienda->denominazione));
	    $templateProcessor->setValue('azienda_sede_legale', htmlspecialchars($azienda->sedeLegale));
	    $templateProcessor->setValue('azienda_citta', htmlspecialchars($azienda->citta));
	    $templateProcessor->setValue('azienda_pIva', htmlspecialchars($azienda->pIva));
	     $templateProcessor->setValue('azienda_cap', htmlspecialchars($azienda->cap));
	    //----------------------------RAPPRESENTANTE LEGALE
	    $templateProcessor->setValue('rappresentanteLegale_nome', htmlspecialchars($azienda->nomeRappresLegale));
	    $templateProcessor->setValue('rappresentanteLegale_cognome', htmlspecialchars($azienda->cognomeRappresLegale));
	    $templateProcessor->setValue('rappresentanteLegale_luogoN', htmlspecialchars($azienda->comuneNascitaRappresLegale));
	    $templateProcessor->setValue('rappresentanteLegale_dataN', htmlspecialchars(date("d/m/Y",strtotime($azienda->dataNascitaRappresLegale))));
	    $templateProcessor->setValue('rappresentanteLegale_cf', htmlspecialchars($azienda->CFRappresLegale));

	    if (!file_exists('public/documenti/' . $stage->id . '/')) {
    		mkdir('public/documenti/' . $stage->id . '/', 0777, true);
		}

		$templateProcessor->saveAs('public/documenti/' . $stage->id . '/convenzione.docx');
		
        return 'public/documenti/' . $stage->id . '/convenzione.docx';	
	}
	public function generaConvenzioneStage($stageId, $studenteId){
		//todo
		$stage = Stage::find($stageId);

		$azienda = $stage->azienda;
		$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('documenti/modelli/stage/convenzione.docx');
		//----------------------------STAGE
		$templateProcessor->setValue('id_stage', htmlspecialchars($stageId));
	    $templateProcessor->setValue('data_stage', htmlspecialchars($stage->created_at));
	    //----------------------------AZIENDA
		$templateProcessor->setValue('azienda_denominazione', htmlspecialchars($azienda->denominazione));
	    $templateProcessor->setValue('azienda_sede_legale', htmlspecialchars($azienda->sedeLegale));
	    $templateProcessor->setValue('azienda_citta', htmlspecialchars($azienda->citta));
	    $templateProcessor->setValue('azienda_pIva', htmlspecialchars($azienda->pIva));
	    $templateProcessor->setValue('azienda_cap', htmlspecialchars($azienda->cap));
	    $templateProcessor->setValue('azienda_sede_tirocinio', htmlspecialchars($azienda->indirizzoSedeTirocinio));
	    $templateProcessor->setValue('azienda_citta_tirocinio', htmlspecialchars($azienda->cittaSedeTirocinio));

	    //----------------------------RAPPRESENTANTE LEGALE
	    $templateProcessor->setValue('rappresentanteLegale_nome', htmlspecialchars($azienda->nomeRappresLegale));
	    $templateProcessor->setValue('rappresentanteLegale_cognome', htmlspecialchars($azienda->cognomeRappresLegale));
	    $templateProcessor->setValue('rappresentanteLegale_luogoN', htmlspecialchars($azienda->comuneNascitaRappresLegale));
	    $templateProcessor->setValue('rappresentanteLegale_dataN', htmlspecialchars(date("d/m/Y",strtotime($azienda->dataNascitaRappresLegale))));
	
	    if (!file_exists('public/documenti/' . $stage->id . '/')) {
    		mkdir('public/documenti/' . $stage->id . '/', 0777, true);
		}

		$templateProcessor->saveAs('public/documenti/' . $stage->id . '/convenzione.docx');

		return 'public/documenti/' . $stage->id . '/convenzione.docx';
	}

	/*PF*/
	public function faiDownloadProgettoFormativo($stageId,$studenteId){
		$stage = Stage::find($stageId);
		$studente = Studente::find($studenteId);

		if($stage->archiviato)
			return Response::download('public/documenti/' . $stage->id . '/progettoFormativo-' .$studente->cognome ."-". $studente->nome. '.docx');
		else
			$nomeFile = $this->generaProgettoFormativo($stageId,$studenteId);
		
		return Response::download($nomeFile);
	}

	public function generaProgettoFormativo($stageId,$studenteId){
		$stage = Stage::find($stageId);
		$tipo = $stage->tipo;

		$nomeFile;

		if(strpos($tipo,'Alternanza') !== false){
			//Alternanza
			$nomeFile = $this->generaProgettoFormativoAlternanza($stageId, $studenteId);
		}

		if(strpos($tipo,'Stage') !== false){
			//Stage
			$nomeFile = $this->generaProgettoFormativoStage($stageId, $studenteId);
		}

		return $nomeFile;
	}

	public function generaProgettoFormativoAlternanza($stageId,$studenteId){

		$stage = Stage::find($stageId);

		$azienda = $stage->azienda;

		$studente = Studente::find($studenteId);

		$tutorScuola = $stage->tutorScuola;

		$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('documenti/progettoFormativo.docx');
		//----------------------------STAGE	   
	    $templateProcessor->setValue('id_stage', htmlspecialchars($stageId));
	    $templateProcessor->setValue('data_stage', htmlspecialchars(date("d/m/Y",strtotime($stage->created_at))));

	    //----------------------------STUDENTE
	    $templateProcessor->setValue('nome_studente', htmlspecialchars($studente->nome));
	    $templateProcessor->setValue('cognome_studente', htmlspecialchars($studente->cognome));
	    $templateProcessor->setValue('comuneN_studente', htmlspecialchars($studente->comuneNascita));
	    $templateProcessor->setValue('dataN_studente', htmlspecialchars(date("d/m/Y",strtotime($studente->dataNascita))));
	    $templateProcessor->setValue('comuneR_studente', htmlspecialchars($studente->comuneResidenza));
	    $templateProcessor->setValue('indirizzo_studente', htmlspecialchars($studente->indirizzo));
	    //----------------------------CLASSE
	    $templateProcessor->setValue('studente_classe', htmlspecialchars($studente->classe->classe));
	    $templateProcessor->setValue('studente_sezione', htmlspecialchars($studente->classe->sezione));
	    $templateProcessor->setValue('studente_classe_indirizzo', htmlspecialchars($studente->classe->articolazione));

	    //----------------------------AZIENDA
	    $templateProcessor->setValue('azienda_denominazione', htmlspecialchars($azienda->denominazione));
	    $templateProcessor->setValue('azienda_sede_legale', htmlspecialchars($azienda->sedeLegale));
	    $templateProcessor->setValue('azienda_citta', htmlspecialchars($azienda->citta));

		//return $azienda;
	    //---------------------------TUTOR AZIENDA
	    $templateProcessor->setValue('tutorAzienda_nome', htmlspecialchars($azienda->nomeTutorAziend));
	    $templateProcessor->setValue('tutorAzienda_cognome', htmlspecialchars($azienda->cognomeTutorAziend));

	    //---------------------------TUTOR SCUOLA
	    $templateProcessor->setValue('tutorScuola_nome', htmlspecialchars($tutorScuola->nome));
	    $templateProcessor->setValue('tutorScuola_cognome', htmlspecialchars($tutorScuola->cognome));


	    //---------------------------PERIODI
	    $partecipazione = PartecipazioneStage::where('stage_id', '=', $stageId)->where('studente_id', '=', $studenteId)->firstOrFail();
	    
	    $periodi = $partecipazione->periodi;

        $strPeriodo = "";
        foreach ($periodi as $periodo) {
            $strPeriodo = $strPeriodo . "Dal " . htmlspecialchars(date("d/m/Y",strtotime($periodo["dataInizio"]))) . " al " . htmlspecialchars(date("d/m/Y",strtotime($periodo["dataFine"]))) . " \n"; 
        }

        $templateProcessor->setValue('periodo', $strPeriodo);

        // nei nomi e cognomi si eliminano accenti e apostrofi
        $studente->cognome = str_replace("'", "", str_replace("\"", "", $studente->cognome));
        $studente->nome = str_replace("'", "", str_replace("\"", "", $studente->nome));
        
        $nomeFile = 'public/documenti/' . $stage->id . '/progettoFormativo-' . $studente->cognome ."-". $studente->nome. '.docx';
       
        if (!file_exists('public/documenti/' . $stage->id . '/')) {
    		mkdir('public/documenti/' . $stage->id . '/', 0777, true);
		}

	    $templateProcessor->saveAs($nomeFile);


		return $nomeFile;
	}

	public function generaProgettoFormativoStage(){}
}