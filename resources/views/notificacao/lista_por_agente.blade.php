@extends('layout.master')
@section('content')
<p class="text-center h1">Buscar por Agente</p>
<p class="bg-success">Digite a matricula ou nome do agente...</p>



<form>
    <input type="text" class="form-control center-block" id="filtroBusca" placeholder="Matrícula ou Nome..." aria-describedby="inputSuccess4Status">
    
    <br/>
    <button type="submit" class="btn btn-success center-block">Buscar</button>
</form>

@endsection
