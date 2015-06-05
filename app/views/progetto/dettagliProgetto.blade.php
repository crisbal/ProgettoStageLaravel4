@extends('base')


@section('title')
{{$stage->tipo}} N° {{ $stage->numero }}
@endsection

@section('navProgetto')
active
@endsection

@section('content')
<div class="dettagliStage">
    <div class="page-header">
        <h1>{{$stage->tipo}} N° {{ $stage->numero }}
            <small>Creato in data {{  date("d/m/Y",strtotime($stage->created_at)) }}</small>
            <div class="pull-right">
                <a href="{{ action('DocumentiController@faiDownloadConvenzione', [$stage->id, $stage->id]) }}"><button class="btn btn-success">Scarica Convenzione</button></a>
                <a href="{{ action('StageController@faiArchiviaProgetto', array($stage->id)) }}"><button title="Conferma Documenti" class="btn btn-{{ $stage->archiviato? 'warning' : 'default' }} glyphicon glyphicon-star"></button></a>
            </div>
        </h1>
        
        <div class="clearfix"></div>
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

                <b>Citta'</b>
                <p>{{$stage->azienda->citta}}</p>

              </div>
            </div>
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
                        <p>
                            {{ $studente->classe->classe}}
                            {{$studente->classe->articolazione}}
                            {{$studente->classe->sezione}}
                        </p>
                      </div>
                      <div class="col-lg-6">
                        <b>Codice Fiscale</b>
                        <p>{{ $studente->CF}}</p>

                        <p><a href="{{ action('DocumentiController@faiDownloadProgettoFormativo', array($stage->id, $studente->id)) }}"><button class="btn btn-success">Scarica Progetto Formativo</button></a></p>

                        <p><a href="{{ action('DocumentiController@faiDownloadAppendiceMinorenni', array($stage->id, $studente->id)) }}"><button class="btn btn-success">Scarica Appendice Minorenni</button></a></p>

                      </div>
                  </div>

                  </div>

                </li>
            </ul>
        @endforeach
      </div>
    </div>

</div>

@endsection