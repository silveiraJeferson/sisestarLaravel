<?php

namespace sisestar\Http\Controllers;

use Illuminate\Http\Request;

use sisestar\Http\Requests;
use sisestar\Http\Controllers\Controller;

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
