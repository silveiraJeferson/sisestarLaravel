<?php

namespace sisestar\Http\Controllers;

use Illuminate\Http\Request;
use sisestar\Http\Requests;
use sisestar\Http\Controllers\Controller;
use sisestar\MsgResposta;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex() {
        //
    }

    public function postLogin() {
        return view('public.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postStore(Request $request) {
        dd($request);
//        $resp = new MsgResposta();
//        $dados = $request->all();
//        if($dados['senha'] != $dados['senha2']){
//            $id = $dados['id_func'];
//            $resp->status = false;
//            $resp->msg = "As senhas não coincidem";
//            $status = false;
//            return redirect("gestao/funcionario-info/$id",  compact('resp','status'));
//        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
    public function getLogin($id){
        $func = DB::table('funcionarios')->where('id',$id)->get();
        return view('gestao.cadastro_login',  compact('func'));
    }
    

}
