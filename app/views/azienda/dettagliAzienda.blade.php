@extends('base')


@section('title')
Dettagli {{$azienda->denominazione}} 
@endsection

@section('navAziende')
active
@endsection

@section('content')
<div class="dettagliStage">
    <div class="page-header">
      <h1>{{$azienda->denominazione}} <small>{{$azienda->pIva}}</small></h1>
    </div>
    <!-- DETTAGLI azienda -->

    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">Dettagli Azienda</h3>
      </div>
      <div class="panel-body">
            <div class="row">
	            <div class="col-lg-6">
	                <b>Denominazione</b>
	                <p>{{$azienda->denominazione}} &nbsp;</p>

	                <b>Settore</b>
	                <p>{{$azienda->settore}} &nbsp;</p>

	                <b>Area</b>
	                <p>{{$azienda->area}} &nbsp;</p>

	                <b>Associazione</b>
	                <p>{{$azienda->associazione}} &nbsp;</p>

	            </div>
	            <div class="col-lg-6">
	            	<b>Partita IVA</b>
	                <p>{{$azienda->pIva}} &nbsp;</p>

	                <b>Sede Legale</b>
	                <p>{{$azienda->sedeLegale}} ({{$azienda->citta}}) &nbsp;</p>

	                <b>CAP</b>
	                <p>{{$azienda->cap}} &nbsp;</p>

	                <b>Descrizione</b>
	                <p>{{$azienda->descrizione}} &nbsp;</p>
	            </div>
	            <div class="warning">
	            	<p>Aggiungere lista stage a cui ha partecipato</p>
	            </div>
          </div>
      </div>
    </div>
@endsection