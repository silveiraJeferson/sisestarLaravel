@extends('layout.master')
@section('content')
<table class="table table-responsive table-striped">
    <h1>Funcionarios</h1>
    <tr>
        Listagem dos funcionarios
    </tr>
    <tr>
        <th>#</th>
        <th>Sobrenome</th>
        <th>Nome</th>
        <th>Matrícula</th>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        
    </tr>
     @foreach($funcionarios as $funcionario)
    <tr>
        <th><img class="img-circle" style="width: 30px; height: 30px;"src="{{url('imagem/arquivo/'.$funcionario->foto)}}" alt="" /></th>
        <th>{{$funcionario->sobrenome}}</th>
        <th>{{$funcionario->nome}}</th>
        <th>{{$funcionario->matricula}}</th>
    </tr>
    @endforeach
</table>


<?php echo $funcionarios->render();?>
@endsection












<!--    @foreach($funcionarios as $funcionario)
    <img class="img-circle" style="width: 30px; height: 30px;"src="{{url('imagem/arquivo/'.$funcionario->foto)}}" alt="" />
    {{$funcionario->nome}}<br/>
    @endforeach-->