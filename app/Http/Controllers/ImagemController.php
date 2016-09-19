<?php
namespace sisestar\Http\Controllers;
use Illuminate\Http\Request;
use sisestar\Http\Requests;
use Illuminate\Support\Facades\Storage;
use sisestar\Http\Controllers\Controller;


class ImagemController extends Controller {
    function getImagemFile($nome) {
        $imagem = Storage::disk('public')->get($nome);
        return response($imagem,200)->header('Content-Type', 'image/jpeg');
    }
}