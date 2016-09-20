@extends('layout.master')
@section('content')
<p class="text-center h1">Buscar por Nº da notificação</p>
<p class="bg-success">Digite o nº da notificação...</p>



<form>
    <input type="text" class="form-control center-block" id="filtroBusca" placeholder="Nº da notificação..." aria-describedby="inputSuccess4Status">
    
    <br/>
    <button type="submit" class="btn btn-success center-block">Buscar</button>
</form>

@endsection
