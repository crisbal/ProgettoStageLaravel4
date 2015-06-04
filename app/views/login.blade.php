
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
    padding-top: 2em;
    background-color: whitesmoke;
    text-align: center;
}

    .container{
        display: inline-block;
        text-align: center;
        background-color: white;
        padding: 2em;
        border: 1px solid gray;
        border-radius: 15px;

        width: auto;
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
    <div class="container">
      <div class="text-center" style=";">
        <br>
        <h1 style="color:#024389; font-size:4em;">AGAS</h1>
        <h3 ><span style="color:#186AC2;">A</span>utomazione <span style="color:#186AC2;">G</span>estione <span style="color:#186AC2;">A</span>lternanze e <span style="color:#186AC2;">S</span>tage</h3>
        <br>
      </div>
      <form class="form-signin" method="post" action="{{action('LoginController@faiLogin')}}">
        <label for="inputEmail" class="sr-only">Nome Utente</label>
        <input name="username" type="text" id="inputEmail" class="form-control" placeholder="Nome Utente" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Ricorda i miei dati
          </label>
        </div>
        @if(isset($error))
        <div class="text-danger">{{$error}}</div>
        @endif
        <button class="btn btn-lg btn-primary btn-block" type="submit"><span class="glyphicon glyphicon-lock"></span> Login sicuro</button>
        
      </form>

    </div> <!-- /container -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
