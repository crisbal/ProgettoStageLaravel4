
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>AGAS - Login</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">  

    <style>
    body {
    padding-top: 40px;
    padding-bottom: 40px;
    background-color: #eee;
    }

    .form-signin {
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
    }
    .form-signin .form-signin-heading,
    .form-signin .checkbox {
    margin-bottom: 10px;
    }
    .form-signin .checkbox {
    font-weight: normal;
    }
    .form-signin .form-control {
    position: relative;
    height: auto;
    -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
            box-sizing: border-box;
    padding: 10px;
    font-size: 16px;
    }
    .form-signin .form-control:focus {
    z-index: 2;
    }
    .form-signin input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
    }
    .form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    }
    </style>
  <link href='http://fonts.googleapis.com/css?family=Cantarell:400,400italic' rel='stylesheet' type='text/css'>
  
  </head>

  <body>
      <div class="text-center" style="background-color:#D5E6FF;">
        <br>
        <h1 style="color:#024389; font-size:4em;">AGAS</h1>
        <h3 ><span style="color:#186AC2;">A</span>utomazione <span style="color:#186AC2;">G</span>estione <span style="color:#186AC2;">A</span>lternanze e <span style="color:#186AC2;">S</span>tage</h3>
        <br>
      </div>
    <div class="container">
      
      <form class="form-signin">
        <h2 class="form-signin-heading text-center">Esegui il Login</h2>
        <label for="inputEmail" class="sr-only">Nome Utente</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Nome Utente" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Ricorda i miei dati
          </label>
        </div>
        <a href="{{ action('StageController@index')}}" style="text-decoration:none"><button class="btn btn-lg btn-primary btn-block" type="button"><span class="glyphicon glyphicon-lock"></span> Login sicuro</button></a>
      </form>

    </div> <!-- /container -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
