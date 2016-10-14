@extends('layout.master')
@section('content')
<table class="table table-hover">
    <tr>
        <th>Data</th>
        <th>Placa</th>
        <th class="hidden-xs">Local</th>
        <th>Notificação Nº</th>
        <th>#</th>
        
    </tr>
    @foreach($consulta as $notificacao)
    <tr>
        <td>{{date("d/m/Y", strtotime($notificacao->data))}}</td>
        <td>{{$notificacao->placa}}</td>
        <td class="hidden-xs">{{$notificacao->local}}</td>
        <td>{{$notificacao->num_notificacao}}</td>       
        <td><a class="btn btn-success btnVerNotificacao" href="/notificacao/ver/{{$notificacao->id}}">Ver</a></td>
    </tr>
    @endforeach
</table>
<?php echo $consulta->render() ?>

@endsection

