@extends('layout.master')
@section('content')
<?php header('refresh: 30; url=/notificacao/todas'); ?>
<table class="table table-hover bg-info">
    <tr>
        <th>Data</th>
        <th>Placa</th>
        <th class="hidden-xs">Local</th>
        <th>Notificação Nº</th>
        <th>#</th>
    </tr>
    @foreach($consulta as $notificacao)
    <tr>
        <td>{{$notificacao->data}}</td>
        <td class="text-uppercase">{{$notificacao->placa}}</td>
        <td class="hidden-xs">{{$notificacao->local}}</td>
        <td>{{$notificacao->num_notificacao}}</td>       
        <td><a class="btn btn-success btnVerNotificacao" href="/notificacao/ver/{{$notificacao->id}}">Ver</a></td>
    </tr>
    @endforeach
</table>
<div class="center-block text-center">
    {!! $consulta->render() !!}
</div>

@endsection

