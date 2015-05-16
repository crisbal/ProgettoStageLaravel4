@extends('base')


@section('title')
Modifica Azienda {{$azienda->denominazione}} 
@endsection

@section('navAziende')
active
@endsection

@section('content')
<form action="{{ action('AziendeController@faiModificaAzienda', $azienda->id) }}" method="POST" >
<div class="pull-right">
        <input type="submit" class="btn btn-success" value="Salva Modifiche" />
</div>
<div class="dettagliStage">
    <div class="page-header">
      <h1>{{$azienda->denominazione}} <small>{{$azienda->pIva}}</small></h1>
    </div>
    
    
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
					      <input type="text" class="form-control" id="exampleInputAmount" value="{{$azienda->denominazione}}" name="denominazione">
					    </div>
					  </div>

	                <b>Settore</b>	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="exampleInputAmount" value="{{$azienda->settore}}" name="settore">
					    </div>
					  </div>

					 <b>Associazione</b>	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="exampleInputAmount" value="{{$azienda->associazione}}" name="associazione">
					    </div>
					  </div>

					  <b>Telefono</b>	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="exampleInputAmount" value="{{$azienda->telefono}}" name="telefono">
					    </div>
					  </div>
	            </div>
	            <div class="col-lg-6">
	            	
	            	<b>Partita IVA</b>	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="exampleInputAmount" value="{{$azienda->pIva}}" name="pIva">
					    </div>
					  </div>

					<b>Codice Fiscale</b>	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="exampleInputAmount" value="{{$azienda->CFA}}" name="CFA">
					    </div>
					  </div>

	                <b>E-mail</b>	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="exampleInputAmount" value="{{$azienda->email}}" name="email">
					    </div>
					  </div>
	            </div>
          </div>
      </div>
    </div>

    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">Sede Legale</h3>
      </div>
      <div class="panel-body">
            <div class="row">
	            <div class="col-lg-6">
	            	<b>Città</b>	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="exampleInputAmount" value="{{$azienda->citta}}" name="citta">
					    </div>
					  </div>

					  <b>Indirizzo</b>	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="exampleInputAmount" value="{{$azienda->sedeLegale}}" name="sedeLegale">
					    </div>
					  </div>
	            </div>
	            <div class="col-lg-6">
	                <b>CAP</b>	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="exampleInputAmount" value="{{$azienda->cap}}" name="cap">
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
					      <input type="text" class="form-control" id="exampleInputAmount" value="{{$azienda->cittaSedeTirocinio}}" name="cittaSedeTirocinio">
					    </div>
					  </div>

					  <b>Indirizzo</b>	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="exampleInputAmount" value="{{$azienda->indirizzoSedeTirocinio}}" name="indirizzoSedeTirocinio">
					    </div>
					  </div>
	            </div>
	            <div class="col-lg-6">
	            	<b>CAP</b>	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="exampleInputAmount" value="{{$azienda->capSedeTirocinio}}" name="capSedeTirocinio">
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
					      <input type="text" class="form-control" id="exampleInputAmount" value="{{$azienda->nomeRappresLegale}}" name="nomeRappresLegale">
					    </div>
					  </div>

					  <b>Codice Fiscale</b>	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="exampleInputAmount" value="{{$azienda->CFRappresLegale}}" name="CFRappresLegale">
					    </div>
					  </div>

					  <b>Comune di Nascita</b>	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="exampleInputAmount" value="{{$azienda->comuneNascitaRappresLegale}}" name="comuneNascitaRappresLegale">
					    </div>
					  </div>
	            </div>
	            <div class="col-lg-6">
	            	<b>Cognome</b>	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="exampleInputAmount" value="{{$azienda->cognomeRappresLegale}}" name="cognomeRappresLegale">
					    </div>
					  </div>

					  <b>Data di Nascita</b>	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="exampleInputAmount" value="{{$azienda->dataNascitaRappresLegale}}" name="dataNascitaRappresLegale">
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
					      <input type="text" class="form-control" id="exampleInputAmount" value="{{$azienda->nomeTutorAziend}}" name="nomeTutorAziend">
					    </div>
					  </div>
	            </div>
	            <div class="col-lg-6">
	            	<b>Cognome</b>	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="exampleInputAmount" value="{{$azienda->cognomeTutorAziend}}" name="cognomeTutorAziend">
					    </div>
					  </div>
	            </div>
          </div>
      </div>
    </div>

    </div>
   </form> 
@endsection