@extends('base')


@section('title')
Stage {{ $stage->id }}
@endsection

@section('navProgetto')
active
@endsection

@section('content')
<div class="dettagliStage">
    <div class="page-header">
      <h1>Progetto Stage {{ $stage->id }} <small>Creato in data 31/03/2015</small></h1>
    </div>
    <div class="progress">
      <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
        Fase 3/5
      </div>
    </div>
    
    <!-- DETTAGLI AZIENDE -->

    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">Dettagli azienda</h3>
      </div>
      <div class="panel-body">
            <div class="row">
              <div class="col-lg-6">
                <b>Nome</b>
                <p>{{ $stage->azienda->denominazione }}</p>

                <b>PIVA</b>
                <p>{{$stage->azienda->pIva}}</p>

                <b>Sede Legale</b>
                <p>{{$stage->azienda->sedeLegale}}</p>
              </div>
              <div class="col-lg-6">
                <b>CAP</b>
                <p>{{$stage->azienda->cap}}</p>
              </div>
          </div>
          <h3>Documenti <small>Clicca per scaricare</small></h3>
          <ul class="list-group">
            <li class="list-group-item"><a href="#">Convenzione Scuola-Lavoro</a></li>
            <li class="list-group-item"><a href="#">Progetto Formativo</a></li>
          </ul>
      </div>
    </div>

<!-- DETTAGLI STUDENTI -->

<div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">Dettagli Studenti</h3>
      </div>
      <div class="panel-body">
        @foreach($stage->studenti as $studente)
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="row">
                      <div class="col-lg-6">
                        <b>Nome</b>
                        <p>{{ $studente->nome }}</p>

                        <b>Cognome</b>
                        <p>{{ $studente->cognome }}</p>

                        <b>Classe</b>
                        <p>{{ $studente->classe}}</p>
                      </div>
                      <div class="col-lg-6">
                        <b>Codice Fiscale</b>
                        <p>{{ $studente->CF}}</p>
                      </div>
                  </div>
                </li>
            </ul>
        @endforeach
      </div>
    </div>

</div>

@endsection