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
				<th>Settore</th>
				<th>Indirizzo</th>
				<th>Dettagli</th>
			</tr>
		</thead>
		@foreach($aziende as $azienda)
		<tr>
			<td>{{$azienda->id}}</td>
			<td style="text-transform:capitalize;">{{ strtolower($azienda->denominazione) }}</td>
			<td>{{$azienda->settore}}</td>
			<td style="text-transform:capitalize;">{{ strtolower($azienda->citta . " , " .  $azienda->sedeLegale) }}</td>
			<td><a href="{{ action('AziendeController@mostraSpecifica',$azienda->id)}}">Dettagli Azienda</a></td>
		</tr>
		@endforeach
	</table>
</div>
@endsection