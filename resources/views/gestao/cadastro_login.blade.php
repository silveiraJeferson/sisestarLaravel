@extends('layout.master')
@section('content')
{{dd($resp)}}

<div class="center-block text-center  bg-success " style="width: 50%">
    <h1>Novo usuário do sistema</h1>
    <form method="post" action="/autenticar/novologin">
        <h3>Login</h3>
        <input class="text-center"type="text" name="login" value="<?php echo @$_POST['login']?>"placeholder="Nome de usuario"/>
        <h3>Senha</h3>
        <input class="text-center" type="password" name="senha" placeholder="Senha"/>
        <h3>Repita a senha</h3>
        <input class="text-center" type="password" name="senha2" placeholder="Repita a senha"/>
        <br/> <br/> <br/> 
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="id" value="{{$func[0]->id}}">

        <p><input class="btn btn-success"type="submit" value="Cadastrar"/></p>



    </form>
</div>



@endsection