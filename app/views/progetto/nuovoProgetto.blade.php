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
		  		<th>Scegli</th>
		  	</tr>
		  	<tbody class="searchable">
			  	@foreach($aziende as $azienda)
				<tr azienda="{{ $azienda->id }}">
					<td>{{$azienda->denominazione}}</td>
					<td>{{$azienda->pIva}}</td>
					<td><button type="button" class="btn btn-info scegliAzienda">Scegli</button></td>
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
		                <button type="button" class="btn btn-success">Conferma</button>
						<button type="button" class="btn btn-danger">Annulla</button>
		            </div>
		        </div>
		    </div>
		</div>
	</div>
	<div id="step2">
		<h1>Creazione Nuovo Stage <small>Scelta degli studenti</small></h1>
		<br>
		<div class="input-group"> 
			<span class="input-group-addon">Filtra</span>
	    	<input id="filterStudenti" type="text" class="form-control" placeholder="Scrivi qui...">
		</div>
		<br>	
		<table id="tabellaStudenti" class="table table-striped">
		  	<tr>
		  		<th>Nome</th>
		  		<th>Cognome</th>
		  		<th>Classe</th>
		  		<th>Scegli</th>
		  	</tr>
		  	<tbody class="searchable">
				@foreach($studenti as $studente)
					<tr studente="{{ $studente->id }}">
						<td>{{$studente->nome}}</td>
						<td>{{$studente->cognome}}</td>
						<td>{{$studente->classe->classe}} {{$studente->classe->articolazione}} {{$studente->classe->sezione}}</td>
						<td><input type="checkbox"></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div id="step3">
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
		                <button type="button" class="btn btn-success">Conferma</button>
						<button type="button" class="btn btn-danger">Annulla</button>
		            </div>
		        </div>
		    </div>
		</div>
	</div>
@endsection


@section('script')
<script>
	$(document).ready(function () {
	    (function ($) {
	        $('.filterable').keyup(function () {
	            var rex = new RegExp($(this).val(), 'i');
	            $('.searchable tr').hide();
	            $('.searchable tr').filter(function () {
	                return rex.test($(this).text());
	            }).show();
	        })
	    }(jQuery));
	});

	$(document).ready(function () {
	    (function ($) {
	        $('#filterStudenti').keyup(function () {
	            var rex = new RegExp($(this).val(), 'i');

	            var trBuone = $('.searchable tr input:not(:checked)').parent().parent();

	            trBuone.hide();
	            $('.searchable tr').filter(function () {
	                return rex.test($(this).text());
	            }).show();
	        })
	    }(jQuery));
	});
	
	$(".scegliAzienda").click(function(){
		var idAzienda = $(this).closest("tr").attr("azienda");

		$.get( "api/azienda/" + idAzienda, function( azienda ) {
			$("#nomeAzienda").html(azienda.denominazione);
			$("#sedeLegaleAzienda").html(azienda.sedeLegale);
			$("#modaleAzienda").modal('show');
		});

	});
	</script>
@endsection