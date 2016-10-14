<?php

namespace sisestar\Http\Controllers;

use Illuminate\Http\Request;
use sisestar\Http\Requests;
use sisestar\Http\Controllers\Controller;
use sisestar\Funcionario as Funcionario;
use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class GestaoController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex() {
        return view('gestao.index');
    }

    public function getFuncionarios() {
        $funcionarios = DB::table('funcionarios')->orderBy('sobrenome')->paginate(7);
        return view('gestao.lista_funcionarios', compact('funcionarios'));
    }

    public function getFuncionarioInfo($id) {
        $consulta = DB::table('funcionarios')->where('id', $id)->get();
        return view('gestao.info_funcionario', compact('consulta'));
    }

    public function getBuscar() {
        return view('gestao.buscar_funcionario');
    }

    public function getCadastrar() {
        $cargos = DB::table('cargos')->orderBy('id', 'desc')->get();
        return view('gestao.cadastro_funcionario', compact('cargos'));
    }

    //------------------------------------------------rotas methodos post----------

    public function postCadastrar(Request $request) {
        
        $file = $request->file('arquivo');
        if ($request->hasFile('arquivo') && $file->isValid()) {
            if ($file->getClientMimeType() == "image/jpeg") {            
                
                
                $dadosFormulario = $request->all(); 
                $dadosFormulario["foto"] = $dadosFormulario["matricula"].$dadosFormulario["cpf"].".jpg";
                $cadastro = new Funcionario($dadosFormulario);
                $file->move('app/public', $dadosFormulario["foto"]);
                $cadastro->save();
            }
        }


        $id = DB::table('funcionarios')->max('id');
        return redirect("gestao/funcionario-info/$id");
    }

    public function postFuncionarios(Request $request) {
        $funcionarios = DB::table('funcionarios')->where('nome', 'ilike', "%$request->param%")
                ->orWhere('sobrenome', 'ilike', "%$request->param%")
                ->orWhere('matricula', 'ilike', "%$request->param%")
                ->orderBy('sobrenome')
                ->paginate(7);





        return view('gestao.lista_funcionarios', compact('funcionarios'));
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
    public function store(Request $request) {
        //
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

}
