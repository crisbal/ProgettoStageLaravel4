@extends('base')


@section('title')
Home Page Stage
@endsection

@section('navProgetto')
active
@endsection

@section('content')
  <a href="{{ action('StageController@mostraNuovoProgetto') }}"><button type="button" class="btn btn-default btn-lg" style="width:100%;margin-bottom:1em">Nuovo Progetto</button></a>
  <div class="panel-body">
      <div class="row">
          <div class="col-lg-4 text-center">
            <button id="sInvernali" class="btn btn-lg btn-primary glyphicon glyphicon-education" style="width:200px; height:200px; font-size:1.5em;"><br>Stage<br>Invernali</button>
          </div>
          <div class="col-lg-4 text-center">
            <button id="alternanze" class="btn btn-lg btn-primary glyphicon glyphicon-home" style="width:200px; height:200px; font-size:1.5em;"><br>Alternanze<br>Scuola-Lavoro</button>
          </div>
          <div class="col-lg-4 text-center">
            <button id="sEstivi" class="btn btn-lg btn-primary glyphicon glyphicon-certificate" style="width:200px; height:200px; font-size:1.5em;"><br>Stage<br>Estivi</button>
          </div>
      </div>
  </div>
  <br>
  
  <h3 id="titolo" style="text-align:center;"></h3>

  <br>

<!-- ........................STAGE INVERNALI COLLAPSE FATTO.......................... -->
<div class="panel-group" id="pannelloStageInvernali">
    <div class="panel panel-info">
      <div class="panel-heading">
          <div class="panel-title">
            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#pannelloStageInvernali" href="#invernaliInCorso">STAGE INVERNALI IN CORSO</a>
          </div>
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
          @if(strpos($stage->tipo,'nvern') !== false)
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
    <br>
    <div class="panel panel-danger">
        <div class="panel-heading">
          <div class="panel-title">
            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#pannelloStageInvernali" href="#invernaliTerminati">STAGE INVERNALI TERMINATI</a>
          </div>
        </div>
        <div id="invernaliTerminati" class="panel-collapse collapse" style="padding: 0.5em 1em;">
        LOREM IPSUM
        </div>
    </div>
</div>


<!-- ........................ALTERNANZE MANCA COLLAPSE............................... -->
<div id="pannelloAlternanze">
  <div class="panel panel-info">
      <div class="panel-heading">
      ALTERNANZE IN CORSO
      </div>
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
      @if(strpos($stage->tipo,'lternanz') !== false)
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

  <div class="panel panel-danger">
      <div class="panel-heading">
      ALTERNANZE TERMINATE
      </div>
  </div>
</div>

<!-- ........................STAGE ESTIVI MANCA COLLAPSE............................. -->
<div id="pannelloStageEstivi">
  <div class="panel panel-info">
      <div class="panel-heading">
      STAGE ESTIVI IN CORSO
      </div>
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
      @if(strpos($stage->tipo,'stiv') !== false)
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

  <div class="panel panel-danger">
      <div class="panel-heading">
      STAGE ESTIVI TERMINATI
      </div>
  </div>
</div>

@endsection
@section('script')
<script src="js/mostraProgetti.js"></script>
@endsection