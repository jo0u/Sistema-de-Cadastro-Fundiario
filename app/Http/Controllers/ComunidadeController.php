<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comunidades;
use App\Models\Municipios;
class ComunidadeController extends Controller
{
    public function dashboard(){

        $comunidades = Comunidades::all();

        return view('comunidades.dashboard',['comunidades' => $comunidades]);
    }

    public function create(){

        
        $municipios = Municipios::all();


        return view('comunidades.cadastrar',['municipios' => $municipios]);
    }

    public function store(Request $request){

        $comunidades = Comunidades::all();

        $comunidades = new Comunidades;

        $comunidades->municipios_id = $request->municipios_id ;
        $comunidades->nome_comunidade = $request->nome_comunidade ;
       

        $comunidades->save();

       

        return redirect('/comunidades/dashboard')->with('msg','Comunidade criada com sucesso!');

    }


}
