<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">  
	@yield('head')
</head>
<body>
	<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Gestione Stage</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="@yield('navProgetto')"><a href="{{ action('StageController@index')}}">Progetti</a></li>
          <li class="@yield('navAziende')"><a href="{{ action('AziendeController@mostraAziende')}}">Aziende</a></li>
          <li class="@yield('navStudenti')"><a href="{{ action('StudentiController@mostraStudenti')}}">Alunni</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="@yield('navAmministrazione')"><a style="font-size:1.5em" class="glyphicon glyphicon-cog" href="{{ action('AmministrazioneController@mostraCreaClasse')}}"></a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>

  <div class="container">
    <div class="content">
		@yield('content')
	</div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  @yield('script')
</body>
</html>