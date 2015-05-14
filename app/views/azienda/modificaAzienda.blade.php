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
    
    <!-- Modifica azienda -->

    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">Modifica Azienda</h3>
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
					
					<br>
	                <b>Settore</b>
	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="exampleInputAmount" value="{{$azienda->settore}}" name="settore">
					    </div>
					  </div>
					
					<br>
	                <b>Associazione</b>
	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="exampleInputAmount" value="{{$azienda->associazione}}" name="associazione">
					    </div>
					  </div>
					
					<br>
					<b>Note</b>
	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="exampleInputAmount" value="{{$azienda->note}}" name="note">
					    </div>
					  </div>
					
					<br>
	            </div>
	            <div class="col-lg-6">
	            	<b>Partita IVA</b>
	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="exampleInputAmount" value="{{$azienda->pIva}}" name="pIva">
					    </div>
					  </div>
					
					<br>
	                <b>Sede Legale</b>
	                
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="exampleInputAmount" value="{{$azienda->sedeLegale}}" name="sedeLegale">
					    </div>
					  </div>
					
					<br>
	             

	            </div>
          </div>
      </div>
    </div>
   </form> 
@endsection