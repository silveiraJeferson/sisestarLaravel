<?php

namespace sisestar\Http\Controllers;

use Illuminate\Http\Request;

use sisestar\Http\Requests;
use sisestar\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use sisestar\Notificacao;

class NotificacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        return view('notificacao.index');
    }
    
    public function getData(){
        return view('notificacao.lista_por_data');
    }
    public function getAgente(){
        return view('notificacao.lista_por_agente');
    }
    public function getPlaca() {
        return view('notificacao.lista_por_placa');
    }
    public function getCodigo() {
        return view('notificacao.lista_por_codigo');
    }
    public function getSetor() {
        return view('notificacao.lista_por_setor');
    }
    public function getLocal() {
        return view('notificacao.lista_por_local');
    }
    public function getTodas(){
        $consulta = DB::table('notificacaos')->orderBy('data')->orderBy('hora','desc')->where('status',1)->paginate(20);
        return view('notificacao.todas',  compact('consulta'));
    }
    public function getVer($id){
        $consulta = DB::table('notificacaos')->where('id',$id)->get();       
        foreach($consulta as $item){
            $id_status = $item->status;
        }          
        $sql = DB::table('status_notificacaos')->where('id', $id_status)->get();
        foreach($sql as $item){
            $status = $item->nome;
        }         
        return view('notificacao.ver_notificacao',  compact('consulta','status'));
    }
    public function getNotificar(){
        $irregularidades = DB::table('irregularidades')->get();
        return view('notificacao.notificar',  compact('irregularidades'));
    }
    public function getRegularizar($id){
        $notificacao = DB::table('notificacaos')->where('id',$id)->get();
        foreach($notificacao as $item){
            $id_status = $item->status;
        }        
        $status = DB::table('status_notificacaos')->where('id', $id_status);
        return view('notificacao.regularizacao',  compact('notificacao','status'));
    }
    public function getDelete($id){
        DB::table('notificacaos')->delete($id);
    }

    

    //------------------------------------------metodos posts -------------------------
    
    public function postNotificar(Request $request){
        $dadosDoFormulario = $request->all();
        $notificacao = new Notificacao($dadosDoFormulario);
        $notificacao->save();
    }

    









































    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
