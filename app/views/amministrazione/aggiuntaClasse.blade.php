@extends('base')


@section('title')
Aggiungi Classe
@endsection

@section('navAmministrazione')
active
@endsection

@section('content')
<h1>Aggiunta di una classe</h3>
	{{ Form::open(array('url' => action('AmministrazioneController@faiCreaClasse'), 'files' => true)) }}
	<h3>Classe</h3>
	<select class="form-control" name="classe">
	  <option>1</option>
	  <option>2</option>
	  <option>3</option>
	  <option>4</option>
	  <option>5</option>
	</select>
	<h3>Articolazione</h3>
	<select class="form-control" name="articolazione">
	  <option>Informatica</option>
	  <option>Meccanica</option>
	  <option>Elettronica</option>
	  <option>Telecomunicazioni</option>
	  <option>Automazione</option>
	  <option>Meccatronica ed Energia</option>
	  <option>Liceo Scientifico</option>
	</select>
	<h3>Sezione</h3>
	<select class="form-control" name="sezione">
	  <option>A</option>
	  <option>B</option>
	  <option>C</option>
	  <option>D</option>
	  <option>E</option>
	  <option>F</option>
	  <option>G</option>
	  <option>H</option>
	  <option>I</option>
	</select>
	<h3>File Excel Studenti</h3>
	<input type="file" name="excel">

	<br>
	<input type="submit" class="btn btn-primary" value="Aggiungi">
</form>	
@endsection