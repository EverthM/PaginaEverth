<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return "Pagina Principal" ;
    }

public function create() {
    return "Bienvenido a crear un curso" ;
}
 public function show($curso){

    return "Bienvenido al curso $curso" ;
 }

}
