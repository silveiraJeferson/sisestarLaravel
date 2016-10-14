@extends('layout.master')
@section('content')
<p class="text-center h1">Pesquisar Agente</p>
<p class="bg-success">Digite a matricula ou nome do agente...</p>



<form action="/gestao/funcionarios" method="post">
    <input type="text" name="param"class="form-control center-block" id="filtroBusca" placeholder="Matrícula ou Nome..." aria-describedby="inputSuccess4Status">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <br/>
    <button type="submit" class="btn btn-success center-block">Buscar</button>
</form>

@endsection