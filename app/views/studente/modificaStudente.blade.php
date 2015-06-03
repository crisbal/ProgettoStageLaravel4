@extends('base')


@section('title')
Modifica studente {{$studente->denominazione}} 
@endsection

@section('navStudente')
active
@endsection

@section('content')
<form action="{{ action('StudentiController@faiModificaStudente', $studente->id) }}" method="POST" >
<div class="pull-right">
    <input type="submit" class="btn btn-success" value="Salva Modifiche" />
</div>
<div class="dettagliStage">
    <div class="page-header">
      <h1>{{$studente->nome}} {{$studente->cognome}}</h1>
    </div>
    
    <!-- Modifica studente -->

    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">Dettagli Studente</h3>
      </div>
      <div class="panel-body">
            <div class="row">
	            <div class="col-lg-6">

					<b>Nome</b>	                
					<div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control"  value="{{$studente->nome}}" name="nome" required>
					    </div>
					</div>

					<b>Matricola</b>	                
					<div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control"  value="{{$studente->matricola}}" name="matricola">
					    </div>
					</div>

					<b>Data di Nascita</b>	                
					<div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control"  value="{{$studente->dataNascita}}" name="dataNascita" required>
					    </div>
					</div>

					<b>Indirizzo</b>	                
					<div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control"  value="{{$studente->indirizzo}}" name="indirizzo" required>
					    </div>
					</div>

					<b>Articolazione</b>	                
					<div class="form-group">
					    <div class="input-group">
					      <input type="text" required class="form-control" id="articolazione" value="{{$studente->articolazione}}" name="articolazione">
					    </div>
					</div>
	            </div>
	            <div class="col-lg-6">

					<b>Cognome</b>	                
					<div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control"  value="{{$studente->cognome}}" name="cognome" required>
					    </div>
					</div>

					<b>Codice Fiscale</b>	                
					<div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control"  value="{{$studente->CF}}" name="CF" required>
					    </div>
					</div>

					<b>Comune di Nascita</b>	                
					<div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control"  value="{{$studente->comuneNascita}}" name="comuneNascita" required>
					    </div>
					</div>

					<b>Comune di Residenza</b>	                
					<div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control"  value="{{$studente->comuneResidenza}}" name="comuneResidenza" required>
					    </div>
					</div>

					<b>Classe</b>	                
					<div class="form-group">
					    <div class="input-group">
					      <select name="classe" id="classe">
					      	<option value="{{$studente->classe_id}}">{{$studente->classe->classe}} {{$studente->classe->articolazione}} {{$studente->classe->sezione}}</option>
					      	@foreach($classi as $classe)
								<option value="{{$classe->id}}">{{$classe->classe}} {{$classe->articolazione}} {{$classe->sezione}}</option>
							@endforeach
					      </select>
					    </div>
					</div>
	            </div>
          	</div>
      	</div>
    </div>

    
</div>
</form>
@endsection


@section('script')
<script>
$('#classe').on('change', function() {
  $("#articolazione").val("");
});
</script>
@endsection