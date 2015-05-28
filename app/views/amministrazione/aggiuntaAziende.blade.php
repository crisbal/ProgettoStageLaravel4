@extends('base')


@section('title')
Aggiungi Aziende
@endsection

@section('navAmministrazione')
active
@endsection

@section('content')
<h1>Aggiunta delle aziende</h3>
	{{ Form::open(array('url' => action('AmministrazioneController@faiCreaAziende'), 'files' => true)) }}
	<h3>File Excel Aziende</h3>
	<span>Il processo di caricamento potrebbe durare qualche minuto.</span>
	<input type="file" name="excel">

	<br>
	<input type="submit" class="btn btn-primary" value="Aggiungi">
</form>	
@endsection