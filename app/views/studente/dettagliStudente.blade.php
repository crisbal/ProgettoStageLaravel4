@extends('base')


@section('title')
Dettagli Studente
@endsection

@section('navStudenti')
active
@endsection

@section('content')
<div class="dettagliStage">
<div class="pull-right">
                <a href="{{ action('StudentiController@mostraModificaStudente', $studente->id) }}"><button class="btn btn-warning">Modifica Studente</button></a>
               
</div>
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

	                <b>Nome</b>
	                <p>{{$studente->nome}} &nbsp;</p>

	              	<b>Matricola</b>
	                <p>{{$studente->matricola}} &nbsp;</p>

	                <b>Data di Nascita</b>
	                <p>{{ date("d/m/Y",strtotime($studente->dataNascita))}} &nbsp;</p>

	                <b>Indirizzo</b>
	                <p>{{$studente->indirizzo}} &nbsp;</p>

	                <b>Articolazione</b>
	                <p>{{$studente->articolazione}} &nbsp; &nbsp; &nbsp;</p>

	            </div>
	            <div class="col-lg-6">

	                <b>Cognome</b>
	                <p>{{$studente->cognome}} &nbsp; &nbsp;</p>

	                <b>Codice Fiscale</b>
	                <p>{{$studente->CF}} &nbsp;</p>

	                <b>Comune di Nascita</b>
	                <p>{{$studente->comuneNascita}} &nbsp;</p>

	                <b>Comune di Residenza</b>
	                <p>{{$studente->comuneResidenza}} &nbsp;</p>
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