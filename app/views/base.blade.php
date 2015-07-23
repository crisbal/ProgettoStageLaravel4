<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AGAS - @yield('title')</title>
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
        <a class="navbar-brand" href="/">AGAS - IIS Badoni</a>
        <!--<img src="http://www.iisbadoni.gov.it/sites/default/files/logo.png" height="49" width="49">-->
      </div>

      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="@yield('navProgetto')"><a href="/">Progetti</a></li>
          <li class="@yield('navAziende')"><a href="{{ action('AziendeController@mostraAziende')}}">Aziende</a></li>
          <li class="@yield('navStudenti')"><a href="{{ action('StudentiController@mostraStudenti')}}">Alunni</a></li>
          <li class="@yield('navTutor')"><a href="{{ action('TutorController@mostraListaTutor')}}">Tutor</a></li>
        </ul>
        @if(Auth::getUser()->username == "amministrazione")
        <ul class="nav navbar-nav navbar-right">
          <li class="@yield('navAmministrazione')"><a style="font-size:1.5em" class="glyphicon glyphicon-cog" href="{{ action('AmministrazioneController@menu')}}"></a></li>
        </ul>
        @endif
        <form class="navbar-form navbar-right">
          <a href="/logout"><button class="btn btn-primary" type="button">Logout</button></a>
        </form>
      </div>

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