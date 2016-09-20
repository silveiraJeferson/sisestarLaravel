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
        <th></th>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
     @foreach($funcionarios as $funcionario)
    <tr>
        <td><img class="img-circle" style="width: 30px; height: 30px;"src="{{url('imagem/arquivo/'.$funcionario->foto)}}" alt="" /></td>
        <td>{{$funcionario->sobrenome}}</td>
        <td>{{$funcionario->nome}}</td>
        <td>{{$funcionario->matricula}}</td>
        <td><button class="btn btn-success"><a href="/gestao/funcionario-info/{{$funcionario->id}}">Ver</a></button></td>
    </tr>
    @endforeach
</table>


<?php echo $funcionarios->render();?>
@endsection












<!--    @foreach($funcionarios as $funcionario)
    <img class="img-circle" style="width: 30px; height: 30px;"src="{{url('imagem/arquivo/'.$funcionario->foto)}}" alt="" />
    {{$funcionario->nome}}<br/>
    @endforeach-->