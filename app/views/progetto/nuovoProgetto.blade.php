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
						<td><input type="checkbox" autocomplete=off></td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<button id="confermaStudenti" class="btn btn-info btn-lg btn-block">Conferma</button>
		<br>
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
	<div id="stepConferma" style="display:none;">
		<h1 style="text-align:center;">Hai inserito tutti i dati per la creazione dello stage.</h1>
		<form action="{{ action('StageController@faiNuovoProgetto') }}" method="POST">
			<input type="hidden" id="idAzienda" name="idAzienda" value="" autocomplete=off>
			<input type="hidden" id="idStudenti" name="idStudenti" value="" autocomplete=off>
			<input type="hidden" id="idTutor" name="idTutor" value="" autocomplete=off>
			<input type="submit" class="btn btn-success btn-lg btn-block" value="Crea Stage">	
		</form>
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
		idAzienda = $(this).closest("tr").attr("azienda");

		$.get( "api/azienda/" + idAzienda, function( azienda ) {
			$("#nomeAzienda").html(azienda.denominazione);
			$("#sedeLegaleAzienda").html(azienda.sedeLegale);
			$("#modaleAzienda").modal('show');

		});
	});
	$("#confermaAzienda").click(function(){
		$("#modaleAzienda").modal('hide');
		$("#step1").hide();
		$("#step2").show();
		$("#idAzienda").val(idAzienda);
	});
	$("#annullaAzienda").click(function(){
		$("#modaleAzienda").modal('hide');
	});


	$("#confermaStudenti").click(function(){
		$("#step2").hide();
		$("#step3").show();

		inputs = $("#tabellaStudenti tbody tr").find("input:checked");
		for(i=0;i<inputs.length;i++){
			riga = $(inputs[i]).parent().parent();
			$("#idStudenti").val($("#idStudenti").val() + "," + riga.attr("studente"));
		}
	});

	$(".scegliTutor").click(function(){
		idTutor = $(this).closest("tr").attr("tutor");

		$.get( "api/tutor/" + idTutor, function( tutor ) {
			$("#nomeCognomeTutor").html(tutor.cognome + " " + tutor.nome);
			$("#modaleTutor").modal('show');
		});
	});
	$("#confermaTutor").click(function(){
		$("#modaleTutor").modal('hide');
		$("#step3").hide();
		$("#stepConferma").show();
		$("#idTutor").val(idTutor);
	});
	$("#annullaTutor").click(function(){
		$("#modaleTutor").modal('hide');
	});

	$("#vaiIndietro1").click(function(){
		$("#step2").hide();
		$("#step1").show();
	});
	$("#vaiIndietro2").click(function(){
		$("#step3").hide();
		$("#step2").show();
	});

	
	</script>
@endsection