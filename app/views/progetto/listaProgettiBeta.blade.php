@extends('base')


@section('title')
Home Page Stage
@endsection

@section('navProgetto')
active
@endsection

@section('content')
  <a href="{{ action('StageController@mostraNuovoProgetto') }}"><button type="button" class="btn btn-info btn-lg" style="width:100%;margin-bottom:1em">Nuovo Progetto</button></a>
  <div class="panel-body">
      <div class="row">
          <div class="col-lg-4 text-center">
            <button id="sInvernali" class="btn btn-lg btn-primary glyphicon glyphicon-asterisk" style="width:200px; font-size:1.5em;"><br>Stage<br>Invernali</button>
          </div>
          <div class="col-lg-4 text-center">
            <button id="alternanze" class="btn btn-lg btn-primary glyphicon glyphicon-home" style="width:200px; font-size:1.5em;"><br>Alternanze<br>Scuola-Lavoro</button>
          </div>
          <div class="col-lg-4 text-center">
            <button id="sEstivi" class="btn btn-lg btn-primary glyphicon glyphicon-certificate" style="width:200px; font-size:1.5em;"><br>Stage<br>Estivi</button>
          </div>
      </div>
  </div>
  <br>
  
  <h3 id="titolo" style="text-align:center;">SCEGLI UNA CATEGORIA</h3>

  <br>

<!-- ........................STAGE INVERNALI COLLAPSE FATTO.......................... -->
<div class="panel-group" id="pannelloStageInvernali">
    <div class="panel panel-info">
      <div class="panel-heading">
          <div class="panel-title">
            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#pannelloStageInvernali" href="#invernaliInCorso">STAGE INVERNALI IN CORSO</a>
          </div>
      </div>
      <div id="invernaliInCorso" class="panel-collapse collapse" style="padding: 0.5em 1em;">
        <table class="table table-hover">
        <thead>
          <tr>
            <th>Numero</th>
            <th>Azienda</th>
            <th>Settore</th>
            <th>Dettagli</th>
          </tr>
        </thead>
        @foreach($stages as $stage)
        @if(strpos($stage->tipo,'nvern') !== false AND $stage->archiviato == 0)
          <tr>
            <td>{{ $stage->numero }}</td>
            <td style="text-transform:capitalize;">{{ strtolower($stage->azienda->denominazione)}}</td>
            <td style="text-transform:capitalize;">{{ strtolower($stage->azienda->settore) }}</td>
            <td><a href="{{ action('StageController@mostraStage',$stage->id)}}">Dettagli Stage</a></td>
          </tr>
        @endif
        @endforeach
      </table>
    </div>
  </div>
    <br>
    <div class="panel panel-success">
        <div class="panel-heading">
          <div class="panel-title">
            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#pannelloStageInvernali" href="#invernaliArchiviati">STAGE INVERNALI ARCHIVIATI</a>
          </div>
        </div>
        <div id="invernaliArchiviati" class="panel-collapse collapse" style="padding: 0.5em 1em;">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Numero</th>
                <th>Azienda</th>
                <th>Settore</th>
                <th>Dettagli</th>
              </tr>
            </thead>
            @foreach($stages as $stage)
            @if(strpos($stage->tipo,'nvern') !== false AND $stage->archiviato == 1)
              <tr>
                <td>{{ $stage->numero }}</td>
                <td style="text-transform:capitalize;">{{ strtolower($stage->azienda->denominazione)}}</td>
                <td style="text-transform:capitalize;">{{ strtolower($stage->azienda->settore) }}</td>
                <td><a href="{{ action('StageController@mostraStage',$stage->id)}}">Dettagli Stage</a></td>
              </tr>
            @endif
            @endforeach
          </table>
        </div>
    </div>
</div>

<!-- ........................ALTERNANZE COLLAPSE FATTO............................... -->
<div class="panel-group" id="pannelloAlternanze">
  <div class="panel panel-info">
      <div class="panel-heading">
          <div class="panel-title">
            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#pannelloAlternanze" href="#alternanzeInCorso">ALTERNANZE IN CORSO</a>
          </div>
      </div>
      <div id="alternanzeInCorso" class="panel-collapse collapse" style="padding: 0.5em 1em;">
        <table class="table table-hover">
        <thead>
          <tr>
            <th>Numero</th>
            <th>Azienda</th>
            <th>Settore</th>
            <th>Dettagli</th>
          </tr>
        </thead>
        @foreach($stages as $stage)
        @if(strpos($stage->tipo,'lternanz') !== false AND $stage->archiviato == 0)
          <tr>
            <td>{{ $stage->numero }}</td>
            <td style="text-transform:capitalize;">{{ strtolower($stage->azienda->denominazione)}}</td>
            <td style="text-transform:capitalize;">{{ strtolower($stage->azienda->settore) }}</td>
            <td><a href="{{ action('StageController@mostraStage',$stage->id)}}">Dettagli Stage</a></td>
          </tr>
        @endif
        @endforeach
      </table>
    </div>
  </div>
  <br>
  <div class="panel panel-success">
      <div class="panel-heading">
          <div class="panel-title">
            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#pannelloAlternanze" href="#alternanzeArchiviate">ALTERNANZE ARCHIVIATE</a>
          </div>
      </div>
      <div id="alternanzeArchiviate" class="panel-collapse collapse" style="padding: 0.5em 1em;">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Numero</th>
            <th>Azienda</th>
            <th>Settore</th>
            <th>Dettagli</th>
          </tr>
        </thead>
        @foreach($stages as $stage)
          @if(strpos($stage->tipo,'lternanz') !== false and $stage->archiviato == 1)
          <tr>
              <td>{{ $stage->numero }}</td>
              <td style="text-transform:capitalize;">{{ strtolower($stage->azienda->denominazione)}}</td>
              <td style="text-transform:capitalize;">{{ strtolower($stage->azienda->settore) }}</td>
              <td><a href="{{ action('StageController@mostraStage',$stage->id)}}">Dettagli Stage</a></td>
          </tr>
          @endif
        @endforeach
      </table>
      </div>
  </div>
</div>

<!-- ........................STAGE ESTIVI COLLAPSE FATTO............................. -->
<div class="panel-group" id="pannelloStageEstivi">
  <div class="panel panel-info">
      <div class="panel-heading">
        <div class="panel-title">
            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#pannelloStageEstivi" href="#estiviInCorso">STAGE ESTIVI IN CORSO</a>
        </div>
      </div>
      <div id="estiviInCorso" class="panel-collapse collapse" style="padding: 0.5em 1em;">
      
        <table class="table table-hover">
        <thead>
          <tr>
            <th>Numero</th>
            <th>Azienda</th>
            <th>Settore</th>
            <th>Dettagli</th>
          </tr>
        </thead>
        @foreach($stages as $stage)
        @if(strpos($stage->tipo,'stiv') !== false and $stage->archiviato == 0)
          <tr>
            <td>{{ $stage->numero }}</td>
            <td style="text-transform:capitalize;">{{ strtolower($stage->azienda->denominazione)}}</td>
            <td style="text-transform:capitalize;">{{ strtolower($stage->azienda->settore) }}</td>
            <td><a href="{{ action('StageController@mostraStage',$stage->id)}}">Dettagli Stage</a></td>
          </tr>
        @endif
        @endforeach
      </table>
    </div>
  </div>
  <br>
  <div class="panel panel-success">
      <div class="panel-heading">
        <div class="panel-title">
            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#pannelloStageEstivi" href="#estiviArchiviati">STAGE ESTIVI ARCHIVIATI</a>
        </div>
      </div>
      <div id="estiviArchiviati" class="panel-collapse collapse" style="padding: 0.5em 1em;">
        <table class="table table-hover">
        <thead>
          <tr>
            <th>Numero</th>
            <th>Azienda</th>
            <th>Settore</th>
            <th>Dettagli</th>
          </tr>
        </thead>
          @foreach($stages as $stage)
          @if(strpos($stage->tipo,'stiv') !== false and $stage->archiviato == 1)
          <tr>
              <td>{{ $stage->numero }}</td>
              <td style="text-transform:capitalize;">{{ strtolower($stage->azienda->denominazione)}}</td>
              <td style="text-transform:capitalize;">{{ strtolower($stage->azienda->settore) }}</td>
              <td><a href="{{ action('StageController@mostraStage',$stage->id)}}">Dettagli Stage</a></td>
          </tr>
          @endif
          @endforeach
        </table>
      </div>
  </div>
</div>

@endsection
@section('script')
<script src="js/mostraProgetti.js"></script>
@endsection