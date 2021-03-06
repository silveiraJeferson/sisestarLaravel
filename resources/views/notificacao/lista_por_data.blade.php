@extends('layout.master')
@section('content')
<p class="text-center h1">Buscar notificações por data</p>
<p class="bg-success">Selecione a Data...</p>


<!--Listo as ultimas notificações do dia-->
<!--Apenas visivel para telas grandes---------------------------------------------------->

<div id="ultimasNotificacoes" class="thumbnail hidden-xs">
    <div class="bg-primary">
        <p class="h4 text-center text-bold">Notificações de Hoje<br/>{{date("d/m/Y")}}</p>
    </div>
    <table class="table table-hover">
        <tr>
            <th class="col-xs-6 col-sm-4">Placa</th>
            <th class="col-xs-6 col-sm-4 visible-lg">Modelo</th>
            <th class="col-xs-6 col-sm-4"></th>
        </tr>
        @foreach($lista as $notificacao)
        <tr>
            <td class="text-uppercase h6">{{$notificacao->placa}}</td>
            <td class="visible-lg h6">{{$notificacao->modelo}}</td>
            <td><a href="/notificacao/ver/{{$notificacao->id}}" href="#"class="glyphicon glyphicon-list-alt"></a></td>
        </tr>
        @endforeach

    </table>
    <div class="text-center">
        {!! $lista->render() !!}
    </div>
</div>
<!--Apenas visivel em telas pequenas------------------------------------------------->
<div id="ultimasNotificacoesMovel" class="thumbnail visible-xs center-block">
    <div class="bg-primary">
        <p class="h4 text-center text-bold">Notificações de Hoje<br/>{{date("d/m/Y")}}</p>
    </div>
    <table class="table table-hover">
        <tr>
            <th class="col-xs-6 col-sm-4">Placa</th>
            <th class="col-xs-6 col-sm-4 visible-lg">Modelo</th>
            <th class="col-xs-6 col-sm-4"></th>
        </tr>
        @foreach($lista as $notificacao)
        <tr>
            <td class="text-uppercase h6">{{$notificacao->placa}}</td>
            <td class=" h6">{{$notificacao->modelo}}</td>
            <td><a href="/notificacao/ver/{{$notificacao->id}}"class="glyphicon glyphicon-list-alt"></a></td>
        </tr>
        @endforeach
    </table>
    <div class="text-center">
        {!! $lista->render() !!}
    </div>
</div>


<!--Input de busca-------------------------------------------------------------------------->
<form id="busca" >
    <input id="filtroBusca" class="form-control center-block" type="date" name="data_notificacao"/>
    <br/>
    <button  class="btn btn-success center-block"><a href="/notificacao/result">Buscar</a></button>
</form>







@endsection