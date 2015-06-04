@extends('base')

@section('title')
Nuovo Progetto
@endsection

@section('navProgetto')
active
@endsection

@section('content')
    <style>
    h1{
        display: inline-block;
    }

    .indietro{
        vertical-align: text-bottom;
        margin-right: 0.5em;
    }
    </style>
    <div id="step0">
        <h1>Creazione Nuovo Progetto <small>Scelta tipologia progetto</small></h1>
        <div>
            <br>
            <button class="btn btn-lg btn-info btn-block" id="btnAlternanza">Alternanza Scuola-Lavoro</button>
            <br>
            <button class="btn btn-lg btn-info btn-block" id="btnStageE">Stage Estivo</button>
            <br>
            <button class="btn btn-lg btn-info btn-block" id="btnStageI">Stage Invernale</button>
        </div>
    </div>
	<div style="display:none;" id="step1">
		<button vai="0" class="btn btn-default glyphicon glyphicon-chevron-left indietro" ></button>
        <h1>Creazione Nuovo Progetto <small>Scelta dell'azienda</small></h1>
		<br>
		<div class="input-group"> 
			<span class="input-group-addon">Filtra</span>
	    	<input id="filterAzienda" type="text" class="filterableAzienda form-control" placeholder="Scrivi qui...">
		</div>
		<br>	
		<table id="tabellaAziende" class="table table-striped">
		  	<tr>
		  		<th>Ragione Sociale</th>
		  		<th>Partita Iva</th>
		  		<th></th>
		  	</tr>
		  	<tbody class="searchableAzienda">
			  	@foreach($aziende as $azienda)
				<tr azienda="{{ $azienda->id }}">
					<td>{{$azienda->denominazione}}</td>
					<td>{{$azienda->pIva}}</td>
					<td style="text-align:center;"><button type="button" class="btn btn-info scegliAzienda">Scegli</button></td>
				</tr>
				@endforeach
			</tbody>
		</table>
        <br>
       
		<div id="modaleAzienda" class="modal fade" data-keyboard="false" data-backdrop="static" >
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <div class="modal-header">
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                <h4 class="modal-title">Conferma Azienda</h4>
		            </div>
		            <div class="modal-body">
			            <h3>Hai scelto <span id="nomeAzienda"></span></h3>
						<h4>Sede legale <span id="sedeLegaleAzienda"></span></h4>
					</div>
		            <div class="modal-footer">
		                <button type="button" id="confermaAzienda" class="btn btn-success">Conferma</button>
						<button type="button" id="annullaAzienda" class="btn btn-danger">Annulla</button>
		            </div>
		        </div>
		    </div>
		</div>
	</div>
	<div style="display:none;" id="step2">
		<button vai="1" class="btn btn-default glyphicon glyphicon-chevron-left indietro" ></button>
        <h1>Creazione Nuovo Progetto <small>Scelta degli studenti</small></h1>
        <br>
		<div class="input-group"> 
			<span class="input-group-addon">Filtra</span>
	    	<input id="filterStudenti" type="text" class="form-control" placeholder="Scrivi qui...">
		</div>
		<br>	
		<button id="confermaStudenti" class="btn btn-info btn-lg btn-block">Conferma</button>
		<br>
		<table id="tabellaStudenti" class="table table-striped">
		  	<tr>
		  		<th>Cognome</th>
		  		<th>Nome</th>
		  		<th>Classe</th>
		  		<th>Scegli</th>
		  	</tr>
		  	<tbody class="searchableStudente">
				@foreach($studenti as $studente)
					@if ($studente->classe->classe < 6)
					<tr studente="{{ $studente->id }}">
						<td>{{$studente->cognome}}</td>
						<td>{{$studente->nome}}</td>
						<td>{{$studente->classe->classe}} {{$studente->classe->articolazione}} {{$studente->classe->sezione}}</td>
						<td><input type="checkbox" autocomplete=off></td>
					</tr>
					@endif
				@endforeach
			</tbody>
		</table>
	</div>
	<div style="display:none;" id="step3">
        <button vai="2" class="btn btn-default glyphicon glyphicon-chevron-left indietro" ></button>
		<h1>Creazione Nuovo Progetto <small>Scelta del Tutor Scolastico</small></h1>
		<br>
		<div class="input-group"> 
			<span class="input-group-addon">Filtra</span>
	    	<input id="filterTutorScuola" type="text" class="filterableTutor form-control" placeholder="Scrivi qui...">
		</div>
		<br>	
		<table id="tabellaScuola" class="table table-striped">
		  	<tr>
		  		<th>Nome</th>
		  		<th>Cognome</th>
		  		<th>Scegli</th>
		  	</tr>
		  	<tbody class="searchableTutor">
			  	@foreach($tutors as $tutor)
					<tr tutor="{{ $tutor->id }}">
						<td>{{$tutor->nome}}</td>
						<td>{{$tutor->cognome}}</td>
						<td><button type="button" class="btn btn-info scegliTutor">Scegli</button></td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<br>
		<div id="modaleTutor" class="modal fade"   data-keyboard="false" data-backdrop="static" >
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <div class="modal-header">
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                <h4 class="modal-title">Conferma Tutor Aziendale</h4>
		            </div>
		            <div class="modal-body">
			            <h3>Hai scelto <span id="nomeCognomeTutor"></span></h3>
					</div>
		            <div class="modal-footer">
		                <button type="button" id="confermaTutor" class="btn btn-success">Conferma</button>
						<button type="button" id="annullaTutor" class="btn btn-danger">Annulla</button>
		            </div>
		        </div>
		    </div>
		</div>
	</div>
	<div style="display:none;" id="step5">
        <button vai="3" class="btn btn-default glyphicon glyphicon-chevron-left indietro" ></button>
		<h1>Creazione Nuovo Progetto <small>Assegnazione dei periodi</small></h1>
		<br>	
        <div id="periodiStudenti">
        </div>
		<button id="assegnaPeriodi" class="btn btn-info btn-lg btn-block">Conferma</button>
		<br>
	</div>
	<div id="stepConferma" style="display:none;">
        <br>
        <button vai="5" class="btn btn-default glyphicon glyphicon-chevron-left indietro" ></button>
        <br>
		<h1>Creazione Nuovo Progetto <small>Numero Progetto e conclusione</small></h1>
        <br>
        <h3>Numero Progetto</h3>
        <input type="text" id="numeroProgetto" placeholder="Scrivi qui...">
        <br>
        <br>
        <br>
		<button id="btnCreaStage" class="btn btn-success btn-lg btn-block">Conferma Creazione Progetto</button>
        
		<!-- <form action="{{ action('StageController@faiNuovoProgetto') }}" method="POST">
			<input type="hidden" id="idAzienda" name="idAzienda" value="" autocomplete=off>
			<input type="hidden" id="idStudenti" name="idStudenti" value="" autocomplete=off>
			<input type="hidden" id="idTutor" name="idTutor" value="" autocomplete=off>
			<input type="hidden" id="dateInizio" name="dateInizio" value="" autocomplete=off>
			<input type="hidden" id="dateFine" name="dateFine" value="" autocomplete=off>
			<input type="submit" class="btn btn-success btn-lg btn-block" value="Crea Stage">	
		</form> -->
	</div>
@endsection


@section('script')
<script>
    urlPost = "{{ action('StageController@faiNuovoProgetto') }}";
</script>
<script src="js/nuovoProgetto.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/locales/bootstrap-datepicker.it.min.js"></script>
<link rel="stylesheet" href="js/bootstrap-datepicker3.min.css">
@endsection