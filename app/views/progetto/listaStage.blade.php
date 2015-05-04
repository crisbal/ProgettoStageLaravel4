@extends('base')


@section('title')
Home Page Stage
@endsection

@section('navProgetto')
active
@endsection

@section('content')
  <button type="button" class="btn btn-default btn-lg" style="width:100%;margin-bottom:1em">Nuovo Progetto</button>

  @foreach($stages as $stage)
    <div class="panel panel-info">
      <div class="panel-heading">
      <a href="{{ action('StageController@mostraStage',$stage->id) }}">Stage N° {{ $stage->id }}</a> <span style="float:right">{{ $stage->azienda->denominazione }}</span>
      </div>
      <div class="panel-body">
        {{ $stage->descrizione }}
      </div>
    </div>
  @endforeach
@endsection