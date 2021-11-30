<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Requerente;

class RequerenteController extends Controller
{
    public function dashboard(){

        $requerente = Requerente::all();

        return view('requerentes.dashboard',['requerente' => $requerente]);
    }

    public function create(){
        return view('requerentes.cadastrar');
    }


    public function store(Request $request){

        $requerentes = new Requerente;


    }
}
