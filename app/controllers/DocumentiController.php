<?php 

class DocumentiController extends BaseController {


	public function generaProgettoFormativo($stageId,$studenteId){
		$stage = Stage::find($stageId);

		$azienda = $stage->azienda;

		$studente = Studente::find($studenteId);


		$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('documenti/progettoFormativo.docx');
		//----------------------------STAGE	   
	    $templateProcessor->setValue('id_stage', htmlspecialchars($stageId));
	    $templateProcessor->setValue('data_stage', htmlspecialchars($stage->created_at));

	    //----------------------------STUDENTE
	    $templateProcessor->setValue('nome_studente', htmlspecialchars($studente->nome));
	    $templateProcessor->setValue('cognome_studente', htmlspecialchars($studente->cognome));
	    $templateProcessor->setValue('comuneN_studente', htmlspecialchars($studente->comuneNascita));
	    $templateProcessor->setValue('dataN_studente', htmlspecialchars($studente->dataNascita));
	    $templateProcessor->setValue('comuneR_studente', htmlspecialchars($studente->comuneResidenza));
	    $templateProcessor->setValue('numeroCivico_studente', htmlspecialchars($studente->numeroCivico));
	    $templateProcessor->setValue('cap_studente', htmlspecialchars($studente->cap));
	    $templateProcessor->setValue('via_studente', htmlspecialchars($studente->via));
	    //----------------------------CLASSE
	    $templateProcessor->setValue('studente_classe', htmlspecialchars($studente->classe->classe));
	    $templateProcessor->setValue('studente_sezione', htmlspecialchars($studente->classe->sezione));
	    $templateProcessor->setValue('studente_classe_indirizzo', htmlspecialchars($studente->classe->articolazione));

	    //----------------------------AZIENDA
	    $templateProcessor->setValue('azienda_denominazione', htmlspecialchars($azienda->denominazione));
	    $templateProcessor->setValue('azienda_sede_legale', htmlspecialchars($azienda->sedeLegale));
	    $templateProcessor->setValue('azienda_cap', htmlspecialchars($azienda->cap));
	    $templateProcessor->setValue('azienda_citta', htmlspecialchars($azienda->citta));
	    $templateProcessor->setValue('azienda_provincia', htmlspecialchars($azienda->provincia));

	    return $azienda->tutorAzienda;
	    //---------------------------TUTOR AZIENDA
	    $templateProcessor->setValue('tutorAzienda_nome', htmlspecialchars($azienda->tutorAzienda->nome));
	    $templateProcessor->setValue('tutorAzienda_cognome', htmlspecialchars($azienda->tutorAzienda->cognome));

	    //---------------------------TUTOR SCUOLA

	    $templateProcessor->setValue('tutorScuola_nome', htmlspecialchars($stage->tutorScuola->nome));
	    $templateProcessor->setValue('tutorScuola_cognome', htmlspecialchars($stage->tutorScuola->cognome));


	    $templateProcessor->saveAs('documenti/progettoFormativo-' . $stage->id . '-' . $studente->id . '.docx');


		return "Documento Generato";
	}
}