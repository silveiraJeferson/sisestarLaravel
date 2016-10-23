@extends('layout.master')
@section('content')
@foreach($consulta as $funcionario)

<?php
//--------------------------------------calcular idade-----------------------
$data = $funcionario->data_nasc;
list($dia, $mes, $ano) = explode('/', $data);
// Descobre que dia é hoje e retorna a unix timestamp
$hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
// Descobre a unix timestamp da data de nascimento do CPFfulano
$nascimento = mktime(0, 0, 0, $mes, $dia, $ano);
// Depois apenas fazemos o cálculo já citado :)
$idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);

//background da info do cargo
?>
<div class=" bg-info">
    @if(!$login)
    <button style="margin-left:  80%" type="button" class="btn btn-danger" data-toggle="modal" data-target=".bs-example-modal-lg">Criar acesso ao Sistema</button>

    @endif

</div>
<div id="imgPerfil" class="thumbnail">   
    <img class="thumb thumbnail"src="{{url('/imagem/arquivo/'.$funcionario->foto)}}"/>

    <a class="center-block text-center btn-primary" href="#">Editar foto</a>
    <a  class="center-block text-center btn-default" href="#">Alterar Senha</a>   
    <!--    implementar um modal para alteração de imagem de perfil-->    
</div>
<h1 class="text-capitalize">{{$funcionario->nome}}</h1>
<h2 class="bg-success">Cargo: {{$funcionario->cargo}}</h2>

<table class="table">
    <tr>
        <th>Nome Completo:</th><td class="h3 text-capitalize">{{$funcionario->nome ." ". $funcionario->sobrenome}}</td>        
    </tr>
    <tr>
        <th>CPF:</th><td class="h3">{{$funcionario->cpf}}</td>
    </tr>
    <tr>
        <th>Matricula:</th><td class="h3">{{$funcionario->matricula}}</td>
    </tr>
    <tr>
        <th>Idade:</th><td class="h3">{{$idade}} anos</td>
    </tr>
    <tr>
        <th>Data de Nascimento:</th><td class="h3">{{$funcionario->data_nasc}}</td>
    </tr>
</table>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <h4 class="text-center">Novo Usuario do Sistema</h4>
             
            <form class="form-horizontal" method="post" action="{{url('autenticar/store')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="id_func" value="{{ $funcionario->id}}">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Login</label>
                    <div class="col-sm-10">
                        <input type="text" name="login" value="{{$funcionario->cpf}}"class="form-control" id="inputEmail3" placeholder="Login">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
                    <div class="col-sm-10">
                        <input type="password" name="senha" value="{{$funcionario->cpf}}" class="form-control" id="inputPassword3" placeholder="Senha">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Repita a Senha</label>
                    <div class="col-sm-10">
                        <input type="password" name="senha2" value="{{$funcionario->cpf}}" class="form-control" id="inputPassword3" placeholder="Repita a Senha">
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Cadastrar</button>
                        <button  class="btn btn-danger">Cancelar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endforeach
@endsection
