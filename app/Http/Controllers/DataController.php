<?php

namespace sisestar\Http\Controllers;

use Illuminate\Http\Request;
use sisestar\Http\Requests;
use sisestar\Http\Controllers\Controller;

class DataController extends Controller {

    private $stringData;

    function __construct($stringData) {
        $this->stringData = $stringData;
    }
    function getStringData() {
        return $this->stringData;
    }

    
    public function getIdade() {
        $data = $this->getStringData();
        list($dia, $mes, $ano) = explode('/', $data);
// Descobre que dia é hoje e retorna a unix timestamp
        $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
// Descobre a unix timestamp da data de nascimento do CPFfulano
        $nascimento = mktime(0, 0, 0, $mes, $dia, $ano);
// Depois apenas fazemos o cálculo já citado :)
        $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
        return $idade;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
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
