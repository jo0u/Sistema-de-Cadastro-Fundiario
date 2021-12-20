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

 //       $comunidades-> = $request-> ;
        $comunidades->nome_comunidade = $request->nome_comunidade ;
        $comunidades->distrito_sede = $request->distrito_sede ;
        $comunidades->responsavel = $request->responsavel ;
        $comunidades->responsavel_cda = $request->responsavel_cda ;
       

        $comunidades->save();

       

        return redirect('comunidades.dashboard',['comunidades' => $comunidades ])->with('msg','Comunidade criada com sucesso!');

    }


}
