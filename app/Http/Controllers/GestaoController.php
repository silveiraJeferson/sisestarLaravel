<?php

namespace sisestar\Http\Controllers;

use Illuminate\Http\Request;

use sisestar\Http\Requests;
use sisestar\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class GestaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        return view('gestao.index');
    }
    
    public function getFuncionarios()
    {
        $funcionarios = DB::table('funcionarios')->orderBy('sobrenome')->paginate(7);
        return view('gestao.lista_funcionarios',  compact('funcionarios'));
    }
    
    public function getBuscar()
    {
        return view('gestao.buscar_funcionario');
    }
    public function getCadastrar()
    {
        return view('gestao.buscar_funcionario');
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
