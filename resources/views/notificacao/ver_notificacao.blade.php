@extends('layout.master')
@section('content')
<div class="h1 bg-danger">{{$status}}</div>
<br/>
@foreach($consulta as $notificacao)
<div id="filtro" class="jumbotron "><h2>Placa</h2><h1 class="text-uppercase">{{$notificacao->placa}}</h1></div>
<div class="hidden-xs ver_notificacao">
    <br/><br/><br/>
    <p class="verNotif">Número da Notificação: <span class="dadosNotificacao">{{$notificacao->num_notificacao}}</span></p>
    <br/>
    <p>Marca / Modelo: <span class="dadosNotificacao">{{$notificacao->marca}} / {{$notificacao->modelo}}</span></p>
    <br/>
    <p>Data: <span class="dadosNotificacao">{{$notificacao->data}}</span> Hora: <span class="dadosNotificacao">{{$notificacao->hora}}</span></p>
    <br/>
    <br/>
    <p>Local: <span class="dadosNotificacao">{{$notificacao->local}}</span></p>
    <p>Motivo da notificação: <span class="dadosNotificacao">{{$notificacao->observacao}}</span></p>
    <p>
        Data limite para regularização: <span class="dadosNotificacao">{{$notificacao->data_lim_regularizacao}}</span>
        Valor AMTT: <span class="dadosNotificacao">R$ {{$notificacao->valor_amtt}},00</span>
        Valor Detran: <span class="dadosNotificacao">R$ {{$notificacao->valor_detran}},00</span>
    </p>

</div>



<a href="/notificacao/regularizar/{{$notificacao->id}}" class="btn btn-success">Regularizar</a>




<button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bs-example-modal-sm">Excluir</button>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <span class="h3 text-center center-block">Excluir notificação?</span>
            <div class="center-block text-center">
                <a href="/notificacao/delete/{{$notificacao->id}}" style="margin-left: 20%;" type="submit" value="Sim" class="btn btn-primary">Sim</a>        
                <button style="float: right; margin-right: 20%;" type="button" class="btn btn-danger" data-dismiss="modal">Não</button>
            </div>

        </div>
    </div>
</div>
<br/>







<!-- esta div sera exibida apenas em dispositivos com telas pequenas -->
<div class="visible-xs">
    <p >Número da Notificação: <span class="dadosNotificacao">{{$notificacao->num_notificacao}}</span></p>
    <p >Placa: <span class="dadosNotificacao">{{$notificacao->placa}}</span></p>
</div>



@endforeach


<!--<script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>-->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->

@endsection