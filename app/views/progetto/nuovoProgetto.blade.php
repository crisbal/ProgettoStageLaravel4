@extends('base')

@section('title')
Nuovo Progetto
@endsection

@section('navProgetto')
active
@endsection

@section('content')
	<h1>Creazione Nuovo Stage <small>Scelta dell'azienda</small></h1>
	<br>
	<div class="input-group"> 
		<span class="input-group-addon">Filtra</span>
    	<input id="filter" type="text" class="form-control" placeholder="Scrivi qui...">
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
				<td><button type="button" class="btn btn-info scegliAzienda">Scegli azienda</button></td>
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
@endsection


@section('script')
<script>
	$(document).ready(function () {
	    (function ($) {
	        $('#filter').keyup(function () {
	            var rex = new RegExp($(this).val(), 'i');
	            $('.searchable tr').hide();
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