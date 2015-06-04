@extends('base')


@section('title')
Lista Studenti
@endsection

@section('navStudenti')
active
@endsection

@section('content')
	<h1>Lista Alunni</h1>
	<br>
	@foreach($classi as $classe)
		<div class="panel-group" id="accordion">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#{{$classe->id}}">@if ($classe->classe < 6){{$classe->classe}} @endif {{$classe->articolazione}} {{$classe->sezione}}</a>
						@if ($classe->classe < 6)
						<a href="{{ action('StudentiController@faiPromuoviClasse',$classe->id)}}"><button class="pull-right btn btn-success">Promuovi</button></a>
						<div class="clearfix"></div>
						@endif
					</h4>
				</div>
				<div id="{{$classe->id}}" class="panel-collapse collapse" style="padding: 0.5em 1em;">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Cognome</th>
								<th>Nome</th>								
								<th>CF</th>
								<th>Dettagli</th>
							</tr>
						</thead>
						@foreach($classe->studenti as $studente)
						<tr>
							<td>{{$studente->cognome}}</td>
							<td>{{$studente->nome}}</td>
							<td>{{$studente->CF}}</td>
							<td><a href="{{ action('StudentiController@mostraSpecifico',$studente->id)}}">Dettagli Studente</a></td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	@endforeach

@endsection