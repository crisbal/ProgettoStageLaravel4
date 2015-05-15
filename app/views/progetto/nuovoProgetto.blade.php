@extends('base')

@section('title')
Nuovo Progetto
@endsection

@section('navProgetto')
active
@endsection

@section('content')
	<div id="step1">
		<h1>Creazione Nuovo Stage <small>Scelta dell'azienda</small></h1>
		<br>
		<div class="input-group"> 
			<span class="input-group-addon">Filtra</span>
	    	<input id="filterAzienda" type="text" class="filterable form-control" placeholder="Scrivi qui...">
		</div>
		<br>	
		<table id="tabellaAziende" class="table table-striped">
		  	<tr>
		  		<th>Ragione Sociale</th>
		  		<th>Partita Iva</th>
		  		<th></th>
		  	</tr>
		  	<tbody class="searchable">
			  	@foreach($aziende as $azienda)
				<tr azienda="{{ $azienda->id }}">
					<td>{{$azienda->denominazione}}</td>
					<td>{{$azienda->pIva}}</td>
					<td style="text-align:center;"><button type="button" class="btn btn-info scegliAzienda">Scegli</button></td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div id="modaleAzienda" class="modal fade"   data-keyboard="false" data-backdrop="static" >
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
		<h1>Creazione Nuovo Stage <small>Scelta degli studenti</small></h1>
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
		  	<tbody class="searchable">
				@foreach($studenti as $studente)
					<tr studente="{{ $studente->id }}">
						<td>{{$studente->cognome}}</td>
						<td>{{$studente->nome}}</td>
						<td>{{$studente->classe->classe}} {{$studente->classe->articolazione}} {{$studente->classe->sezione}}</td>
						<td><input type="checkbox" autocomplete=off></td>
					</tr>
				@endforeach
			</tbody>
		</table>
		
		<button id="vaiIndietro1" style="transform:rotateY(180deg)" class="btn btn-default glyphicon glyphicon glyphicon-share-alt" ></button>
	</div>
	<div style="display:none;" id="step3">
		<h1>Creazione Nuovo Stage <small>Scelta del Tutor Scolastico</small></h1>
		<br>
		<div class="input-group"> 
			<span class="input-group-addon">Filtra</span>
	    	<input id="filterTutorScuola" type="text" class="filterable form-control" placeholder="Scrivi qui...">
		</div>
		<br>	
		<table id="tabellaScuola" class="table table-striped">
		  	<tr>
		  		<th>Nome</th>
		  		<th>Cognome</th>
		  		<th>Scegli</th>
		  	</tr>
		  	<tbody class="searchable">
			  	@foreach($tutors as $tutor)
					<tr tutor="{{ $tutor->id }}">
						<td>{{$tutor->nome}}</td>
						<td>{{$tutor->cognome}}</td>
						<td><button type="button" class="btn btn-info scegliTutor">Scegli</button></td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<button id="vaiIndietro2" style="transform:rotateY(180deg)" class="btn btn-default glyphicon glyphicon glyphicon-share-alt"></button>
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
	<div style="display:none;" id="step4">
		<h1>Creazione Nuovo Stage <small>Scelta dei periodi</small></h1>
		<br>
		<table id="tabellaPeriodi" class="table table-striped">
		  	<tbody>
			  	<tr>
			  		<th>Data Inizio</th>
			  		<th>Data Fine</th>
			  		<th></th>
			  	</tr>
			  	<tr>
			  		<td><input readonly class="dataInizio" value='{{ $config["dataInizio1"]->valore }}' /></td>
			  		<td><input readonly class="dataFine" value='{{ $config["dataFine1"]->valore }}' /></td>
			  		<td><input type="checkbox"></td>
			  	</tr>
			  	<tr>
			  		<td><input readonly class="dataInizio" value='{{ $config["dataInizio2"]->valore }}' /></td>
			  		<td><input readonly class="dataFine" value='{{ $config["dataFine2"]->valore }}' /></td>
			  		<td><input type="checkbox"></td>

			  	</tr>
			  	<tr>
			  		<td><input readonly class="dataInizio" value='{{ $config["dataInizio3"]->valore }}' /></td>
			  		<td><input readonly class="dataFine" value='{{ $config["dataFine3"]->valore }}' /></td>
			  		<td><input type="checkbox"></td>

			  	</tr>
			  	<tr>
			  		<td><input class="dataInizio" placeholder='aaaa/mm/gg' /></td>
			  		<td><input class="dataFine" placeholder='aaaa/mm/gg' /></td>
			  		<td><input type="checkbox"></td>
					
			  	</tr>
			</tbody>
		</table>
		<button id="aggiungiPeriodi" class="btn btn-default pull-right">+</button>
		<br>	
		<br>
		<br>	
		<button id="confermaPeriodi" class="btn btn-info btn-lg btn-block">Conferma</button>
		<br>
	</div>
	<div style="display:none;" id="step5">
		<h1>Creazione Nuovo Stage <small>Assegnazione periodi</small></h1>
		<br>	
		<table id="listaStudenti">
			<tr>
				<td>Studente</td>
				<td>Periodo</td>
			</tr>
			<tbody>
				

			</tbody>
		</table>
		<button id="assegnaPeriodi" class="btn btn-info btn-lg btn-block">Conferma</button>
		<br>
	</div>
	<div id="stepConferma" style="display:none;">
		<h1 style="text-align:center;">Hai inserito tutti i dati per la creazione dello stage.</h1>
		<button id="btnCreaStage" class="btn btn-success btn-lg btn-block">Crea Progetto</button>
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
<script src="js/nuovoProgetto.js"></script>
@endsection