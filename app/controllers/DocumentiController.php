<?php 

class DocumentiController extends BaseController {

	/*
		- percorso da quale si vanno a prendere i modelli
		- serve perchè il percorso è diverso in base a dove si mette la cartella del progetto di laravel
		- il percorso si va a prendere dalla tabella di config
	*/
	private $path;

	/*Convenzioni*/
	public function faiDownloadConvenzione($stageId,$studenteId){

		$this->path = AppConfig::where('chiave', '=', 'path')->firstOrFail()->valore;

		$stage = Stage::find($stageId);

		$headers = array(
		  'Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document',
		);

		if($stage->archiviato)
			return Response::download('public/documenti/' . $stage->id . '/convenzione.docx', 'convenzione_'.$stage->numero .'.docx',$headers);
		else
			$nomeFile = $this->generaConvenzione($stageId,$studenteId);
		

		return Response::download($nomeFile,'convenzione_'.$stage->numero .'.docx', $headers);
	}

	public function generaConvenzione($stageId,$studenteId){
    $this->path = AppConfig::where('chiave', '=', 'path')->firstOrFail()->valore;

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

		$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor($this->path . 'alternanza/convenzione.docx');
		//----------------------------STAGE
		$templateProcessor->setValue('id_stage', htmlspecialchars($stage->numero));
	    $templateProcessor->setValue('data_stage', htmlspecialchars(date("d/m/Y",strtotime($stage->created_at))));
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
	    $templateProcessor->setValue('rappresentanteLegale_dataN', htmlspecialchars($azienda->dataNascitaRappresLegale));
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

		if(strpos($stage->tipo,'Estivo') !== false){
			$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor($this->path . 'stage/convenzione_estivo.docx');
		}
		else
			$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor($this->path . 'stage/convenzione_invernale.docx');	



		//----------------------------STAGE
		$templateProcessor->setValue('id_stage', htmlspecialchars($stage->numero));
	    $templateProcessor->setValue('data_stage', htmlspecialchars(date("d/m/Y",strtotime($stage->created_at))));
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
	    $templateProcessor->setValue('rappresentanteLegale_dataN', htmlspecialchars($azienda->dataNascitaRappresLegale));
	
	    if (!file_exists('public/documenti/' . $stage->id . '/')) {
    		mkdir('public/documenti/' . $stage->id . '/', 0777, true);
		}

		$templateProcessor->saveAs('public/documenti/' . $stage->id . '/convenzione.docx');

		return 'public/documenti/' . $stage->id . '/convenzione.docx';
	}

  /*
		progetti formativi
	*/
	public function faiDownloadProgettoFormativo($stageId,$studenteId){

		
		$this->path = AppConfig::where('chiave', '=', 'path')->firstOrFail()->valore;


		$stage = Stage::find($stageId);
		$studente = Studente::find($studenteId);

		if($stage->archiviato)
			return Response::download('public/documenti/' . $stage->id . '/progettoFormativo-' .$studente->cognome ."-". $studente->nome." ". $stage->numero. '.docx');
		else
			$nomeFile = $this->generaProgettoFormativo($stageId,$studenteId);
		
		return Response::download($nomeFile);
	}

	public function generaProgettoFormativo($stageId,$studenteId){
    $this->path = AppConfig::where('chiave', '=', 'path')->firstOrFail()->valore;

    
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

		$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor($this->path . 'alternanza/progettoFormativo.docx');
		//----------------------------STAGE	   
	    $templateProcessor->setValue('id_stage', htmlspecialchars($stage->numero));
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
	    $templateProcessor->setValue('studente_classe_indirizzo', htmlspecialchars($studente->articolazione));

	    //----------------------------AZIENDA
	    $templateProcessor->setValue('azienda_denominazione', htmlspecialchars($azienda->denominazione));
	    $templateProcessor->setValue('azienda_sede_legale', htmlspecialchars($azienda->sedeLegale));
	    $templateProcessor->setValue('azienda_citta', htmlspecialchars($azienda->citta));

	    $templateProcessor->setValue('azienda_sede_tirocinio', htmlspecialchars($azienda->indirizzoSedeTirocinio));
	    $templateProcessor->setValue('azienda_citta_tirocinio', htmlspecialchars($azienda->cittaSedeTirocinio));

	    //---------------------------TUTOR AZIENDA
	    $templateProcessor->setValue('tutorAzienda_nome', htmlspecialchars($azienda->nomeTutorAziend));
	    $templateProcessor->setValue('tutorAzienda_cognome', htmlspecialchars($azienda->cognomeTutorAziend));

	    //---------------------------TUTOR SCUOLA
	    $templateProcessor->setValue('tutorScuola_nome', htmlspecialchars($tutorScuola->nome));
	    $templateProcessor->setValue('tutorScuola_cognome', htmlspecialchars($tutorScuola->cognome));


	    if(trim($studente->articolazione)[0] == "M" or substr(trim($studente->articolazione), 0, 3) == "ENE") //meccanica ed energia
	    {
        $obiettivi = File::get($this->path . "ob_meccanica.txt");
      }
	    else if(substr(trim($studente->articolazione), 0, 3) == "ELE" or trim($studente->articolazione)[0] == "A") //elettronica e automazione
	    {
        $obiettivi = File::get($this->path . "ob_elettronica.txt");
      }
	    else if(trim($studente->articolazione)[0] == "I" or trim($studente->articolazione)[0] == "T") //informatica
	    {
	    	$obiettivi = File::get($this->path . "ob_informatica.txt");
	    }
	    else if(trim($studente->articolazione)[0] == "G") //geometra
	  	{
	  		$obiettivi = "- Saper applicare comportamenti coerenti alle norme infortunistiche, di igiene personale e di sicurezza del lavoro.\n
 			- Saper utilizzare e produrre semplici documentazioni tecniche.\n- Eseguire, sotto la direzione del personale dell’ufficio, e/o del titolare, semplici operazioni di progettazione con  esecuzione di  elaborati grafici 
   			completi.";
	  	}


	    $templateProcessor->setValue('obiettivi_alternanza',$obiettivi);


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
        
        $nomeFile = 'public/documenti/' . $stage->id . '/progettoFormativo-' . $studente->cognome ."-". $studente->nome." ". $stage->numero. '.docx';
       
        if (!file_exists('public/documenti/' . $stage->id . '/')) {
    		mkdir('public/documenti/' . $stage->id . '/', 0777, true);
		}

	    $templateProcessor->saveAs($nomeFile);


		return $nomeFile;
	}

//***********************PROGETTO FORMATIVO STAGE********************
	public function generaProgettoFormativoStage($stageId,$studenteId){

		$stage = Stage::find($stageId);

		$azienda = $stage->azienda;

		$studente = Studente::find($studenteId);

		$tutorScuola = $stage->tutorScuola;

	

		if(strpos($stage->tipo,'Estivo') !== false)
			$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor($this->path . 'stage/progetto_formativo_estate.docx');
		else
			$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor($this->path . 'stage/progetto_formativo_invernale.docx');	

		//----------------------------STAGE	   
	    $templateProcessor->setValue('stage_numero', htmlspecialchars($stage->numero));
	    $data = htmlspecialchars(date("d/m/Y",strtotime($stage->created_at)));
	    $templateProcessor->setValue('data_stage', $data);

	    //----------------------------STUDENTE
	    $templateProcessor->setValue('nome_studente', htmlspecialchars($studente->nome));
	    $templateProcessor->setValue('cognome_studente', htmlspecialchars($studente->cognome));
	    $templateProcessor->setValue('comuneN_studente', htmlspecialchars($studente->comuneNascita));
	    $templateProcessor->setValue('dataN_studente', htmlspecialchars(date("d/m/Y",strtotime($studente->dataNascita))));
	    $templateProcessor->setValue('comuneR_studente', htmlspecialchars($studente->comuneResidenza));
	    $templateProcessor->setValue('indirizzo_studente', htmlspecialchars($studente->indirizzo));
	    $templateProcessor->setValue('cf_studente', htmlspecialchars($studente->CF));
	    $templateProcessor->setValue('studente_articolazione', htmlspecialchars($studente->articolazione));

	    //----------------------------AZIENDA
	    $templateProcessor->setValue('azienda_denominazione', htmlspecialchars($azienda->denominazione));
	    $templateProcessor->setValue('azienda_sede_legale', htmlspecialchars($azienda->sedeLegale));
	    $templateProcessor->setValue('azienda_citta', htmlspecialchars($azienda->citta));
	    $templateProcessor->setValue('azienda_cap', htmlspecialchars($azienda->cap));
	    $templateProcessor->setValue('rappresentanteLegale_nome', htmlspecialchars($azienda->nomeRappresLegale));
	    $templateProcessor->setValue('rappresentanteLegale_cognome', htmlspecialchars($azienda->cognomeRappresLegale));
	    $templateProcessor->setValue('azienda_telefono', htmlspecialchars($azienda->telefono));
	    $templateProcessor->setValue('azienda_email', htmlspecialchars($azienda->email));
	    $templateProcessor->setValue('azienda_settore', htmlspecialchars($azienda->settore));
	    $templateProcessor->setValue('azienda_pIva', htmlspecialchars($azienda->pIva));
	    $templateProcessor->setValue('azienda_CFA', htmlspecialchars($azienda->CFA));

	    $templateProcessor->setValue('azienda_sede_tirocinio', htmlspecialchars($azienda->indirizzoSedeTirocinio));
	    $templateProcessor->setValue('azienda_citta_tirocinio', htmlspecialchars($azienda->cittaSedeTirocinio));
      $templateProcessor->setValue('azienda_cap_tirocinio', htmlspecialchars($azienda->capSedeTirocinio));

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
        
        $nomeFile = 'public/documenti/' . $stage->id . '/progettoFormativo-' . $studente->cognome ."-". $studente->nome." ". $stage->numero. '.docx';
       
        if (!file_exists('public/documenti/' . $stage->id . '/')) {
    		mkdir('public/documenti/' . $stage->id . '/', 0777, true);
		}

	    $templateProcessor->saveAs($nomeFile);

		return $nomeFile;		
	}



	/*
		download foglio appendice minorenni
	*/
	public function faiDownloadAppendiceMinorenni($stageId,$studenteId){

		$this->path = AppConfig::where('chiave', '=', 'path')->firstOrFail()->valore;

		$studente = Studente::find($studenteId);
		$stage = Stage::find($stageId);

		$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor($this->path . 'minorenni.docx');
			    
	    $nome_studente = str_replace("'", "", str_replace("\"", "", $studente->nome));
	    $cognome_studente = str_replace("'", "", str_replace("\"", "", $studente->cognome));
        $templateProcessor->setValue('nome_studente', $nome_studente);
        $templateProcessor->setValue('cognome_studente', $cognome_studente);

        
        $nomeFile = 'public/documenti/' . $stage->id . '/appendiceMinorenni-' . $studente->cognome ."-". $studente->nome." ". $stage->numero. '.docx';
       
        if (!file_exists('public/documenti/' . $stage->id . '/'))
    		mkdir('public/documenti/' . $stage->id . '/', 0777, true);

	    $templateProcessor->saveAs($nomeFile);


		return Response::download($nomeFile);
	}
}
