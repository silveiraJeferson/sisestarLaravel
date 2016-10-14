<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>SisEstaR | Project</title>

        <!-- Bootstrap -->
        <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('bootstrap/css/sisestar.css')}}" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body id="loginMovel">
        <div class="container">
            <span id="logoFormLoginMovel">SisEstaR</span>
            <div id="formLoginMovel">
                <form action="{{url('/notificacao/notificar')}}">
                    <input type="text" class="form-control center-block inputLoiginMovel" id="" placeholder="Login">
                    <input type="text" class="form-control  center-block inputLoiginMovel" id="" placeholder="Senha">
                    <button id="btInputLoiginMovel"type="submit" class="btn  center-block inputLoiginMovel">LogOn</button>
                </form>
            </div>
        </div>
    </body>