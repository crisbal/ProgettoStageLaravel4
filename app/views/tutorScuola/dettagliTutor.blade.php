@extends('base')


@section('title')
Dettagli Tutor Scuola
@endsection

@section('navTutor')
active
@endsection

@section('content')
<div class="dettagliTutor">
<div class="pull-right">
      <a href="{{ action('TutorController@mostraModificaTutor', $tutor->id) }}"><button class="btn btn-warning">Modifica Tutor</button></a>
</div>
    <div class="page-header">
      <h1>{{$tutor->nome}} {{$tutor->cognome}}</h1>

    </div>

    <!-- DETTAGLI TUTOR -->

    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">Dettagli Tutor</h3>
      </div>
      <div class="panel-body">
            <div class="row">
	            <div class="col-lg-6">

	                <b>Nome</b>
	                <p>{{$tutor->nome}} &nbsp;</p>

	              	<b>Telefono</b>
	                <p>{{$tutor->telefono}} &nbsp;</p>

	                <b>E-Mail</b>
	                <p>{{$tutor->email}} &nbsp;</p>

	            </div>
	            <div class="col-lg-6">

	                <b>Cognome</b>
	                <p>{{$tutor->cognome}} &nbsp; &nbsp;</p>

	                <b>Cellulare</b>
	                <p>{{$tutor->cellulare}} &nbsp; &nbsp;</p>

	            </div>
          	</div>
      	</div>
    </div>

@endsection