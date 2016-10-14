@extends('layout.master')
@section('content')
<h1>Pagina de regularização </h1>
O objeto já está aqui, é só tratar
@foreach($notificacao as $att)
<h2>Placa:
{{$att->placa}}
</h2>
@endforeach

@endsection