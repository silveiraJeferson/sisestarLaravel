<?php

use Illuminate\Support\Facades\DB;

$logados = DB::table('funcionarios_logados')->orderBy('nome')->paginate(13);
?>
<!DOCTYPE html>

<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title >SisEstaR | Project</title>

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

        <div id="superior-bar" class="blueSisestar">
            <a href="{{url('/')}}"><img class="imgLogo"src="{{url('/imagem/arquivo/icon-estacionamento-infra_2.png')}}"/>
                <span id="sisestarTituloSite">SisEstaR</span>
            </a>
            <!----------------------------------------------------------------------botão notificação----------------------------------->

            <button id="btnSuperiorBar" class="btn btn-default dropdown hidden-xs btnSuperiorBar">
                <a class="dropdown-toggle glyphicon glyphicon-copy" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">
                    Notificações <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="{{url('/notificacao/todas')}}">Listar todas asNotificações</a></li>
                    <li><a href="{{url('/notificacao/data')}}">Listar Notificações por Data</a></li>
                    <li><a href="{{url('/notificacao/agente')}}">Listar Notificações por Agente</a></li>
                    <li><a href="{{url('/notificacao/placa')}}">Listar Notificações por Placa</a></li>
                    <li><a href="{{url('/notificacao/codigo')}}">Listar Notificações por Código</a></li>
                    <li><a href="{{url('/notificacao/setor')}}">Listar Notificações por Setor</a></li>
                    <li><a href="{{url('/notificacao/local')}}">Listar Notificações por Local</a></li>
                </ul>
            </button>
            <!----------------------------------------------------------------------botão regularização----------------------------------->
            <button id="btnSuperiorBar" class="btn btn-default dropdown hidden-xs btnSuperiorBar">
                <a class="dropdown-toggle glyphicon glyphicon-ok-sign" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">
                    Regularização <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="{{url('/notificacao/placa')}}">Buscar por Placa</a></li>
                    <li><a href="{{url('/notificacao/codigo')}}">Buscar por Código</a></li>

                </ul>
            </button>
            <!----------------------------------------------------------------------botões para gestão de funcionários----------------------------------->

            <button id="btnSuperiorBar" class="btn btn-warning dropdown hidden-xs btnSuperiorBar">
                <a class="dropdown-toggle glyphicon glyphicon-list-alt" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">
                    Gestão Funcionários <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="{{url('/gestao/funcionarios')}}">Listar Funcionários</a></li>
                    <li><a href="{{url('/gestao/buscar')}}">Buscar Funcionários</a></li>
                    <li><a href="{{url('/gestao/cadastrar')}}">Adicionar Funcionários</a></li>                   
                </ul>
            </button>             




            <button id="btnLogin" class="btn btn-default btnSuperiorBar hidden-xs">
                <a class="glyphicon glyphicon-user" href="{{url('/login')}}">Login</a>
            </button>
            <button id="btnLogin" class="btn btn-default btnSuperiorBar visible-xs">
                <a class="glyphicon glyphicon-user" href="{{url('/loginmovel')}}"></a>
            </button>

        </div>

        <!----------------------------------------------------------------------botões para dispositivos pequenos----------------------------------->
        <div id="btnTelaPequena"class=" center-block text-center">
            <button id="btnSuperiorBar" class="btn btn-default dropdown visible-xs-inline-block btnSuperiorBar">
                <a class="dropdown-toggle glyphicon glyphicon-copy" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">
                     <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="{{url('/notificacao/todas')}}">Listar todas asNotificações</a></li>
                    <li><a href="{{url('/notificacao/data')}}">Listar Notificações por Data</a></li>
                    <li><a href="{{url('/notificacao/agente')}}">Listar Notificações por Agente</a></li>
                    <li><a href="{{url('/notificacao/placa')}}">Listar Notificações por Placa</a></li>
                    <li><a href="{{url('/notificacao/codigo')}}">Listar Notificações por Código</a></li>
                    <li><a href="{{url('/notificacao/setor')}}">Listar Notificações por Setor</a></li>
                    <li><a href="{{url('/notificacao/local')}}">Listar Notificações por Local</a></li>
                </ul>
            </button>

            <button id="btnSuperiorBar" class="btn btn-default dropdown visible-xs-inline-block btnSuperiorBar">
                <a class="dropdown-toggle glyphicon glyphicon-ok-sign" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">
                     <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="{{url('/notificacao/placa')}}">Buscar por Placa</a></li>
                    <li><a href="{{url('/notificacao/codigo')}}">Buscar por Código</a></li>
                </ul>
            </button>
            <button id="btnSuperiorBar" class="btn btn-warning dropdown visible-xs-inline-block btnSuperiorBar">
                <a class="dropdown-toggle glyphicon glyphicon-list-alt" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="{{url('/gestao/funcionarios')}}">Listar Funcionários</a></li>
                    <li><a href="{{url('/gestao/buscar')}}">Buscar Funcionários</a></li>
                    <li><a href="{{url('/gestao/cadastrar')}}">Adicionar Funcionários</a></li>                   
                </ul>
            </button> 
        </div>
        <br/><br/>  
        <div class="thumbnail funcionariosLogados hidden-xs h6">
            @foreach($logados as $func)
            <table class="table-condensed bg-default">
                <tr >
                    <td style="width: 90%">
                        <img id="imgFuncLogado" src="{{url('/imagem/arquivo/'.$func->foto)}}"/> {{substr($func->nome, 0, 15)}}...

                    </td>
                    <td style="margin-right: 0">
                        @if($func->logado)
                        <div style="color: #64e554; margin-right: 0; font-size: 25px;">•</div>
                        @else
                        <div style="color: #f4ced2; margin-right: 0; font-size: 25px;">•</div>
                        @endif
                    </td>
                </tr>               
            </table>
            @endforeach
            <div style="font-size: 5px">
                {!! $logados->render() !!} 

            </div>

        </div>
        <div class="container dinamica">



            @yield('content')
            <script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        </div>


    </body>

</html>