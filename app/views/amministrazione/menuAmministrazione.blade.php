@extends('base')


@section('title')
Menu Amministrazione
@endsection

@section('navAmministrazione')
active
@endsection

@section('content')
<div class="menuAmministrazione">
	<div class="page-header">
		<h1> Menù Amministrazione </h1>
	</div>
	<!-- INSERIMENTO AZIENDE E ALUNNI-->

    <div class="panel-body">
	    <div class="row">
	        <div class="col-lg-6 text-center">
	        	<a href="{{ action('AmministrazioneController@mostraCreaAziende') }}"><button class="btn btn-lg btn-primary glyphicon glyphicon-briefcase"><br>Inserisci<br>Aziende</button></a>
	        </div>
	        <div class="col-lg-6 text-center">
	        	<a href="{{ action('AmministrazioneController@mostraCreaClasse') }}"><button class="btn btn-lg btn-primary glyphicon glyphicon-user"><br>Inserisci<br>Classe</button></a>
	        </div>
	    </div>
    </div>

	<div class="list-group">
		<div class="list-group-item list-group-item-info">
	        <h4>Parametri di configurazione</h4>
	    </div>

		<div class="list-group-item">
			<div class="panel-body">
	    <div class="row">
	        <div class="col-lg-12 text-center">
	        	modifica path
	       		
	    		<button class="btn btn-primary ">Salva</button>
	       	</div>
		</div>
	    
    </div>
	    
</div>
@endsection