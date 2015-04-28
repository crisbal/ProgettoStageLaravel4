<?php 

class DocumentiController extends BaseController {


	public function generaConvenzione($stageId,$studenteId){
		$stage = Stage::find($stageId);

		$azienda = $stage->azienda;

		$studente = Studente::find($studenteId);


		$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('documenti/progettoFormativo.docx');
	    $templateProcessor->setValue('id_stage', htmlspecialchars($stageId));
	    $templateProcessor->setValue('data_stage', htmlspecialchars($stage->created_at));
	    $templateProcessor->setValue('nome_studente', htmlspecialchars($studente->nome));
	    $templateProcessor->setValue('cognome_studente', htmlspecialchars($studente->cognome));

	    $templateProcessor->setValue('azienda_denominazione', htmlspecialchars($azienda->denominazione));
	    $templateProcessor->setValue('azienda_sede_legale', htmlspecialchars($azienda->sedeLegale));

	    $templateProcessor->saveAs('documenti/progettoFormativo-' . $stage->id . '-' . $studente->id . '.docx');

		return "Documento Generato";
	}
}
