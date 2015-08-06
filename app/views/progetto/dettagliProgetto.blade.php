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
                <button class="btn btn-info" data-toggle="modal" data-target="#modaleStage"><i class="glyphicon glyphicon-edit"></i> Modifica</button>
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
<div id="modaleStage" class="modal fade" data-keyboard="false" data-backdrop="static" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Modifica Stage</h4>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <label for="numeroProgetto">Numero Progetto</label>
                    <input type="number" class="form-control" id="numeroProgetto" placeholder="Numero Progetto" value="{{$stage->numero}}">
                    <br>
                    <button class="btn btn-info" onclick="suggerisciNumero();">Numero Consigliato</button>
                  </div>
                  <div class="form-group">
                    <label for="dataProgetto">Data Progetto</label>
                    <input type="text" class="form-control" id="dataProgetto" placeholder="Data Progetto" value="{{  date("d/m/Y",strtotime($stage->created_at)) }}">
                  </div>
                  
          </div>
                <div class="modal-footer">
                    <button type="button" id="faiModificaStage" class="btn btn-success">Salva</button>
            <button type="button" data-dismiss="modal" class="btn btn-danger">Annulla</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
<script>
  urlModificaStage = "{{ action('StageController@faiModificaProgetto') }}";
</script>
<script src="/js/bootstrap-datepicker.min.js"></script>
<script src="/js/locales/bootstrap-datepicker.it.min.js"></script>
<link rel="stylesheet" href="/js/bootstrap-datepicker3.min.css">
<script>
$( "#dataProgetto" ).datepicker({
    format: 'dd/mm/yyyy',
    orientation: 'top',
    language: 'it'
});

function suggerisciNumero(){
  $.get( '/api/numero/' + "{{$stage->tipo}}", function(data){
    $("#numeroProgetto").val(data);
  });
}

$("#faiModificaStage").click(function  () {
  var data = {};
  data.stage = {{ $stage->id }};
  data.numero = $("#numeroProgetto").val();
  data.data = $("#dataProgetto").data('datepicker').getFormattedDate('yyyy-mm-dd');

  var dataToSend = "json=" + JSON.stringify(data);
  $.get(urlModificaStage, dataToSend, function(data){
    location.reload();
  });

});
</script>
@endsection