@extends('base')


@section('title')
Modifica Azienda {{$azienda->denominazione}} 
@endsection

@section('navAziende')
active
@endsection

@section('content')
<div class="pull-right">
                <a href=""><button class="btn btn-success">Salva modifiche</button></a>
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
	                <form class="form-inline">
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="exampleInputAmount" value="{{$azienda->denominazione}}">
					    </div>
					  </div>
					</form>
					<br>
	                <b>Settore</b>
	                <form class="form-inline">
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="exampleInputAmount" value="{{$azienda->settore}}">
					    </div>
					  </div>
					</form>
					<br>
	                <b>Associazione</b>
	                <form class="form-inline">
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="exampleInputAmount" value="{{$azienda->associazione}}">
					    </div>
					  </div>
					</form>
					<br>
					<b>Note</b>
	                <form class="form-inline">
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="exampleInputAmount" value="{{$azienda->note}}">
					    </div>
					  </div>
					</form>
					<br>
	            </div>
	            <div class="col-lg-6">
	            	<b>Partita IVA</b>
	                <form class="form-inline">
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="exampleInputAmount" value="{{$azienda->pIva}}">
					    </div>
					  </div>
					</form>
					<br>
	                <b>Sede Legale</b>
	                <form class="form-inline">
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="exampleInputAmount" value="{{$azienda->sedeLegale}}">
					    </div>
					  </div>
					</form>
					<br>
	                <b>CAP</b>
	                <form class="form-inline">
					 <div class="form-group">
					    <div class="input-group">
					      <input type="text" class="form-control" id="exampleInputAmount" value="{{$azienda->cap}}">
					    </div>
					  </div>
					</form>
					<br>

	            </div>
          </div>
      </div>
    </div>
@endsection