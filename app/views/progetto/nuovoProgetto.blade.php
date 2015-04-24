@extends('base')


@section('title')
Nuovo Progetto
@endsection

@section('navProgetto')
active
@endsection

@section('content')
  <form action="{{ action('StageController@faiNuovoProgetto') }}" method="POST">
  <input type="text" name="nome" placeholder="nome">
  <input type="text" name="cognome" placeholder="cognome">
  <input type="submit" value="aggiungi">
</form> 
@endsection