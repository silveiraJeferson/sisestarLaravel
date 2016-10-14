@extends('layout.master')
@section('content')

<div id="formLogin"class="thumbnail center-block">
    <h4 class="text-center">Login</h4>
    <p id="pIdLogin"class="bg-danger text-danger text-center">Informe login e senha</p>
    <div class="input-group">
        <div class="input-group-addon glyphicon glyphicon-user"></div>
        <input type="text" class="form-control" id="exampleInputAmount" placeholder="Login">
    </div>           
    <div class="input-group">
        <div class="input-group-addon glyphicon glyphicon-asterisk"></div>
        <input type="text" class="form-control" id="exampleInputAmount" placeholder="Senha">
    </div>
    <br/>
    <button type="submit" class="btn btn-success center-block">Login</button>
</div>

@endsection