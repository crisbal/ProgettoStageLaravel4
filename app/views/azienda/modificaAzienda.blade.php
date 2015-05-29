@extends('base')


@section('title')
@if($modifica == true)
Modifica Azienda {{$azienda->denominazione}} 
@else
	Nuova Azienda
@endif
@endsection

@section('navAziende')
active
@endsection

@section('content')
@if($modifica == true)
	<form action="{{ action('AziendeController@faiModificaAzienda', $azienda->id) }}" method="POST" >
@else
	<form action="{{ action('AziendeController@faiNuovaAzienda') }}" method="POST" >
@endif
<div class="pull-right">
        <input type="submit" class="btn btn-success" value="Salva Azienda" />
</div>
<div class="dettagliStage">
	@if($modifica == true)
	    <div class="page-header">
	      <h1>{{$azienda->denominazione}} <small>{{$azienda->pIva}}</small></h1>
	    </div>
    @else
		<div class="page-header">
	      <h1>Creazione Nuova Azienda</h1>
	    </div>
    @endif
    
    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">Dettagli Azienda</h3>
      </div>
      <div class="panel-body">
            <div class="row">
	            <div class="col-lg-6">

	            	<b>Denominazione</b>	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="" value="{{$azienda->denominazione}}" name="denominazione" required>
					    </div>
					  </div>

	                <b>Settore</b>	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="" value="{{$azienda->settore}}" name="settore">
					    </div>
					  </div>

					 <b>Associazione</b>	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="" value="{{$azienda->associazione}}" name="associazione">
					    </div>
					  </div>

					  <b>Telefono</b>	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="" value="{{$azienda->telefono}}" name="telefono">
					    </div>
					  </div>
	            </div>
	            <div class="col-lg-6">
	            	
	            	<b>Partita IVA</b>	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="" value="{{$azienda->pIva}}" name="pIva" required>
					    </div>
					  </div>

					<b>Codice Fiscale</b>	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="" value="{{$azienda->CFA}}" name="CFA">
					    </div>
					  </div>

	                <b>E-mail</b>	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="" value="{{$azienda->email}}" name="email">
					    </div>
					  </div>
	            </div>
          </div>
      </div>
    </div>

    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title pull-left">Sede Legale</h3>
        <div class="pull-right">
        	<button class="btn btn-default glyphicon glyphicon-paste" type="button" id="copiaSede" title="Copia in Sede Tirocinio"></button>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="panel-body">
            <div class="row">
	            <div class="col-lg-6">
	            	<b>Città</b>	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="sedeLegaleCitta" value="{{$azienda->citta}}" name="citta" required>
					    </div>
					  </div>

					  <b>Indirizzo</b>	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="sedeLegaleIndirizzo" value="{{$azienda->sedeLegale}}" name="sedeLegale" required> 
					    </div>
					  </div>
	            </div>
	            <div class="col-lg-6">
	                <b>CAP</b>	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="sedeLegaleCAP" value="{{$azienda->cap}}" name="cap" required>
					    </div>
					  </div>
	            </div>
          </div>
      </div>
    </div>

    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">Sede Tirocinio</h3>
      </div>
      <div class="panel-body">
            <div class="row">
	            <div class="col-lg-6">
	                <b>Citta</b>	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="sedeTirocinioCitta" value="{{$azienda->cittaSedeTirocinio}}" name="cittaSedeTirocinio" required>
					    </div>
					  </div>

					  <b>Indirizzo</b>	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="sedeTirocinioIndirizzo" value="{{$azienda->indirizzoSedeTirocinio}}" name="indirizzoSedeTirocinio" required> 
					    </div>
					  </div>
	            </div>
	            <div class="col-lg-6">
	            	<b>CAP</b>	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="sedeTirocinioCAP" value="{{$azienda->capSedeTirocinio}}" name="capSedeTirocinio" required>
					    </div>
					  </div>
	            </div>
          </div>
      </div>
    </div>

    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">Rappresentante Legale</h3>
      </div>
      <div class="panel-body">
            <div class="row">
	            <div class="col-lg-6">
	            	<b>Nome</b>	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="" value="{{$azienda->nomeRappresLegale}}" name="nomeRappresLegale" required>
					    </div>
					  </div>

					  <b>Codice Fiscale</b>	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="" value="{{$azienda->CFRappresLegale}}" name="CFRappresLegale" required>
					    </div>
					  </div>

					  <b>Comune di Nascita</b>	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="" value="{{$azienda->comuneNascitaRappresLegale}}" name="comuneNascitaRappresLegale" required>
					    </div>
					  </div>
	            </div>
	            <div class="col-lg-6">
	            	<b>Cognome</b>	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="" value="{{$azienda->cognomeRappresLegale}}" name="cognomeRappresLegale" required>
					    </div>
					  </div>

					  <b>Data di Nascita</b>	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="" value="{{$azienda->dataNascitaRappresLegale}}" name="dataNascitaRappresLegale" required>
					    </div>
					  </div>
	            </div>
          </div>
      </div>
    </div>

    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">Tutor Aziendale</h3>
      </div>
      <div class="panel-body">
            <div class="row">
	            <div class="col-lg-6">
					<b>Nome</b>	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="" value="{{$azienda->nomeTutorAziend}}" name="nomeTutorAziend" required>
					    </div>
					  </div>
	            </div>
	            <div class="col-lg-6">
	            	<b>Cognome</b>	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="" value="{{$azienda->cognomeTutorAziend}}" name="cognomeTutorAziend" required>
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