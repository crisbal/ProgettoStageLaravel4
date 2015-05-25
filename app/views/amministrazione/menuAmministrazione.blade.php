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
	        	<button class="btn btn-lg btn-primary glyphicon glyphicon-book"><br>Inserisci Aziende</button>
	        </div>
	        <div class="col-lg-6 text-center">
	        	<button class="btn btn-block btn-primary">Inserisci Aziende</button>
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
	        <div class="col-lg-6 text-center">
	        	modifica 1 
	       	</div>
        	<div class="col-lg-6 text-center">
        		modifica 2
    		</div>
		</div>
	    <button class="btn btn-primary btn-block">Salva</button>
    </div>
	    
</div>
@endsection