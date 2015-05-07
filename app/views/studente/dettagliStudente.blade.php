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

	                <b>Articolazione</b>
	                <p>{{$studente->articolazione}}</p>

	            </div>
	            <div class="col-lg-6">
	              	<b>Matricola</b>
	                <p>{{$studente->matricola}}</p>

	                <b>Indirizzo</b>
	                <p>{{$studente->indirizzo}}, {{$studente->comuneResidenza}}</p>

	                <b>Data di Nascita</b>
	                <p>{{ date("d/m/Y",strtotime($studente->dataNascita))}}</p>

	                <b>Comune di Nascita</b>
	                <p>{{$studente->comuneNascita}}</p>
	            </div>
          	</div>
      	</div>
    </div>
    <!-- 	LISTA DEGLI STAGE	-->
    @if(count($studente->stages) > 0)
	    <div class="list-group">
	    <div class="list-group-item list-group-item-info">
		   <h3 class="panel-title">Stage a cui ha partecipato</h3>
		</div>
	    @foreach($studente->stages as $stage)
	    <div class="list-group-item">
		 <a href="{{ action('StageController@mostraStage',$stage->id) }}">Stage N° {{ $stage->id }} creato in data {{  date("d/m/Y",strtotime($stage->created_at)) }}</a>
		 <span style="float:right; text-transform:capitalize;">Azienda: <a href="{{ action('AziendeController@mostraSpecifica',$stage->azienda->id)}}">{{ strtolower($stage->azienda->denominazione) }}</a></span>
		</div> 	
	   	@endforeach
	   	</div>
	@else
		<div class="panel panel-info">
			<div class="panel-heading">
				<div class="panel-title">Questo studente non ha partecipato a nessuno stage</div>
			</div>
		</div>
	@endif
@endsection