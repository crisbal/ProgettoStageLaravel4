@extends('base')


@section('title')
Dettagli Studente
@endsection

@section('navStudenti')
active
@endsection

@section('content')
<div class="dettagliStage">
    <div class="page-header">
      <h1>{{$studente->nome}} {{$studente->cognome}}<small> {{$studente->CF}}</small></h1>
    </div>
    <!-- DETTAGLI STUDENTE -->

    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">Dettagli Studente</h3>
      </div>
      <div class="panel-body">
            <div class="row">
	            <div class="col-lg-6">
	              	
	              	<b>ID</b>
	                <p>{{$studente->id}}</p>

	                <b>Nome</b>
	                <p>{{$studente->nome}}</p>

	                <b>Cogmome</b>
	                <p>{{$studente->cognome}}</p>

	                <b>Codice Fiscale</b>
	                <p>{{$studente->CF}}</p>

	            </div>
	            <div class="col-lg-6">
	              	<b>Matricola</b>
	                <p>{{$studente->matricola}}</p>

	                <b>Indirizzo</b>
	                <p>{{$studente->indirizzo}}, {{$studente->comuneResidenza}}</p>

	                <b>Data di Nascita</b>
	                <p>{{$studente->dataNascita}}</p>

	                <b>Comune di Nascita</b>
	                <p>{{$studente->comuneNascita}}</p>
	            </div>
	            <div class="warning">
	            	<p>Aggiungere lista stage a cui ha partecipato</p>
	            </div>
          </div>
      </div>
    </div>
@endsection