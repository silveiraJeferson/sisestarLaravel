@extends('layout.master')
@section('content')
<p class="text-center h1">Buscar por Placa</p>
<p class="bg-success">Digite a placa do veículo...</p>



<form>
    <input type="text" class="form-control center-block" id="filtroBusca" placeholder="Insira a placa..." aria-describedby="inputSuccess4Status">
    
    <br/>
    <button type="submit" class="btn btn-success center-block">Buscar</button>
</form>

@endsection
