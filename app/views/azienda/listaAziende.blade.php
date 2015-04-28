@extends('base')


@section('title')
Lista Aziende
@endsection

@section('navAziende')
active
@endsection

@section('content')
<div class="panel panel-info">
	<div class="panel-heading">
		<h4 class="panel-title">
			Lista Aziende
		</h4>
	</div>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Denominazione</th>
				<th>Area</th>
				<th>Provincia</th>
				<th>Dettagli</th>
			</tr>
		</thead>
		@foreach($aziende as $azienda)
		<tr>
			<td>{{$azienda->id}}</td>
			<td>{{$azienda->denominazione}}</td>
			<td>{{$azienda->area}}</td>
			<td>{{$azienda->sedeLegale}} ({{$azienda->provincia}})</td>
			<td><a href="{{ action('AziendeController@mostraSpecifica',$azienda->id)}}">Dettagli Azienda</a></td>
		</tr>
		@endforeach
	</table>
</div>
@endsection