@extends('base')


@section('title')
Lista Tutor Scuola
@endsection

@section('navTutor')
active
@endsection

@section('content')
<div class="pull-right">

    <a href="{{action('TutorController@mostraNuovoTutor')}}"><input type="button" class="btn btn-success" value="Aggiungi Tutor" /></a>

</div>

<h1>Lista Tutor Scuola</h1>
<table class="table table-hover">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Cognome</th>
			<th>Dettagli</th>
		</tr>
	</thead>
	@foreach($tutors as $tutor)
	<tr>
		<td style="text-transform:capitalize;">{{ strtolower($tutor->nome) }}</td>
		<td style="text-transform:capitalize;">{{ strtolower($tutor->cognome) }}</td>
		<td><a href="{{ action('TutorController@mostraSpecifico',$tutor->id)}}">Dettagli Tutor</a></td>
	</tr>
	@endforeach
</table>
@endsection