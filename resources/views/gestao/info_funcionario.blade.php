@extends('layout.master')
@section('content')
@foreach($consulta as $funcionario)
<img id="imgPerfil"class="thumb thumbnail"src="{{url('/imagem/arquivo/'.$funcionario->foto)}}"/>
<div id="matriculaPerfil" class="text-center">{{$funcionario->matricula}}</div>
<h1>{{$funcionario->sobrenome}}</h1>
<h2>{{$funcionario->nome}}</h2>
@endforeach
@endsection