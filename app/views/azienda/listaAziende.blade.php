@extends('base')


@section('title')
Lista Aziende
@endsection

@section('navAziende')
active
@endsection

@section('content')
<div class="pull-right">
    <a href="{{action('AziendeController@mostraNuovaAzienda')}}"><input type="button" class="btn btn-success" value="Aggiungi Azienda" /></a>
</div>
<h1>Lista Aziende</h1>
<table class="table table-hover">
	<thead>
		<tr>
			<th>Denominazione</th>
			<th>Settore</th>
			<th>Indirizzo</th>
			<th>Dettagli</th>
		</tr>
	</thead>
	@foreach($aziende as $azienda)
	<tr>
		<td style="text-transform:capitalize;">{{ strtolower($azienda->denominazione) }}</td>
		<td>{{$azienda->settore}}</td>
		<td style="text-transform:capitalize;">{{ strtolower($azienda->citta . " , " .  $azienda->sedeLegale) }}</td>
		<td><a href="{{ action('AziendeController@mostraSpecifica',$azienda->id)}}">Dettagli Azienda</a></td>
	</tr>
	@endforeach
</table>
@endsection