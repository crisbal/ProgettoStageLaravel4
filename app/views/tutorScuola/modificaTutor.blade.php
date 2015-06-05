@extends('base')


@section('title')
@if($modifica == true)
Modifica Tutor {{$tutor->nome}}  {{$tutor->cognome}}
@else
	Nuovo Tutor
@endif
@endsection

@section('navTutor')
active
@endsection

@section('content')
@if($modifica == true)
	<form action="{{ action('TutorController@faiModificaTutor', $tutor->id) }}" method="POST" >
@else
	<form action="{{ action('TutorController@faiNuovoTutor') }}" method="POST" >
@endif
<div class="pull-right">
        <input type="submit" class="btn btn-success" value="Salva Tutor" />
</div>
<div class="dettagliStage">
	@if($modifica == true)
	    <div class="page-header">
	      <h1>{{$tutor->cognome}} <small>{{$tutor->nome}}</small></h1>
	    </div>
    @else
		<div class="page-header">
	      <h1>Inserimento Nuovo Tutor</h1>
	    </div>
    @endif
    
    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">Dettagli Tutor</h3>
      </div>
      <div class="panel-body">
            <div class="row">
	            <div class="col-lg-6">

	            	<b>Nome</b>	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="" value="{{$tutor->nome}}" name="nome" required>
					    </div>
					  </div>


	                <b>Cellulare</b>	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="" value="{{$tutor->cellulare}}" name="cellulare">
					    </div>
					  </div>
	            </div>
	            <div class="col-lg-6">
					
					<b>Cognome</b>	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="" value="{{$tutor->cognome}}" name="cognome" required>
					    </div>
					  </div>

					 <b>E-Mail</b>	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="" value="{{$tutor->email}}" name="email">
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
	$("#copiaSede").click(function(){
		$("#sedeTirocinioCitta").val($("#sedeLegaleCitta").val());
		$("#sedeTirocinioCAP").val($("#sedeLegaleCAP").val());
		$("#sedeTirocinioIndirizzo").val($("#sedeLegaleIndirizzo").val());

	});

</script>
@endsection