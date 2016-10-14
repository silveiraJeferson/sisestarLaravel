@extends('layout.master')
@section('content')
<p class="text-center h1">Buscar notificações por data</p>
<p class="bg-success">Selecione a Data...</p>
<form >

    <input id="filtroBusca" class="form-control center-block" type="date" name="data_notificacao"/>

    <br/>
    <button  class="btn btn-success center-block"><a href="/notificacao/result">Buscar</a></button>
</form>



@endsection