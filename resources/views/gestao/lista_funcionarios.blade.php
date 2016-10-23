@extends('layout.master')
@section('content')
<table class="table table-responsive table-striped table-hover">
    <h1>Listagem dos funcionarios</h1>
    <tr>

    <p class="bg-info">{{$info}}<span class="text-danger h5">{!! $funcionarios->total() !!}</span></p>    




    <p class="formBusca">
        {!! Form::open(['url' => '/gestao/funcionarios']) !!}
        {!! Form::text('param','',array('placeholder' => 'Pesquisar Funcionário')) !!}
        {!! Form::submit('Buscar',array('class' => 'btn-primary'))!!}
        {!! Form::close() !!}

    </p>
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
    <td><a href="/gestao/funcionario-info/{{$funcionario->id}}">
            <img class="img-circle" style="width: 20px; height: 20px;"src="{{url('imagem/arquivo/'.$funcionario->foto)}}" alt="" /></a>
    </td>
    <td class="text-uppercase">{{$funcionario->sobrenome}}</td>
    <td>{{$funcionario->nome}}</td>
    <td>{{$funcionario->matricula}}</td>
    <td><a class="glyphicon glyphicon-eye-open" href="/gestao/funcionario-info/{{$funcionario->id}}"></a></td>
      
</tr>
@endforeach
</table>


<div class="center-block text-center">
    {!! $funcionarios->render() !!}
</div>

@endsection












<!--    @foreach($funcionarios as $funcionario)
    <img class="img-circle" style="width: 30px; height: 30px;"src="{{url('imagem/arquivo/'.$funcionario->foto)}}" alt="" />
    {{$funcionario->nome}}<br/>
    @endforeach-->