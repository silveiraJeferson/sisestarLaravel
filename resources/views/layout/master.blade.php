<!DOCTYPE html>
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
    <body>
        <div class="container">
            <div id="superior-bar" class="blueSisestar">
                <span id="sisestarTituloSite">SisEstaR</span>

                <button id="btnSuperiorBar" class="btn btn-default dropdown hidden-xs">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        Notificações <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        ...
                    </ul>
                </button>

                <button id="btnSuperiorBar" class="btn btn-default dropdown hidden-xs">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="{{url('/menu')}}" role="button" aria-haspopup="true" aria-expanded="false">
                        Regularização <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li></li>    
                    </ul>

                </button>
                <button id="btnLogin" class="btn btn-default">
                    Login
                </button>


            </div>
            <button id="btnSuperiorBar" class="btn btn-default dropdown visible-xs-inline-block">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Notificações <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    ...
                </ul>
            </button>

            <button id="btnSuperiorBar" class="btn btn-default dropdown visible-xs-inline-block">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Notificações <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    ...
                </ul>
            </button>





            @yield('content')

















            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
        </div>
    </body>
</html>