@extends('layout.master')
@section('content')
<p>Cadastro Funcionario</p>

{!! Form::open(['url' => '/gestao/cadastrar','method'=>'POST', 'files'=>true]) !!}
<p>Cargo:   
    <br/>
    @foreach($cargos as $cargo)
    <input type="radio" checked="checked" name="cargo" value="{{$cargo->id}}"/>   {{$cargo->nome}}
    @endforeach
</p> 
<p>{!! Form::text('nome','',array('placeholder' => 'Nome')) !!}</p>
<p>{!! Form::text('sobrenome','',array('placeholder' => 'Sobrenomeome')) !!}</p>
<p>{!! Form::number('cpf','',array('placeholder' => 'CPF')) !!}</p>
<p>{!! Form::number('matricula','',array('placeholder' => 'Matricula')) !!}</p>
<p>{!! Form::date('data_nasc','',array('placeholder' => 'Data de Nascimento')) !!}</p>
<p>{!! Form::file('arquivo') !!}</p>
<p>{!! Form::submit('Enviar')!!}</p>
{!! Form::hidden('foto')!!}






{!! Form::close() !!}
@endsection