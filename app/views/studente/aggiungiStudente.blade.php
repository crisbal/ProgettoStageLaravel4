@extends('base')


@section('title')
Aggiungi Studente
@endsection

@section('navStudenti')
active
@endsection

@section('content')
{{ isset($errors) ? $errors : 'Default' }}

<form action="{{ action('StudentiController@faiAggiungi') }}" method="POST">
	<input type="text" name="nome" placeholder="nome">
	<input type="text" name="cognome" placeholder="cognome">
	<input type="submit" value="aggiungi">
</form>	
@endsection

