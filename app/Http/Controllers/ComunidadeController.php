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

        
        


        return view('comunidades.cadastrar');
    }

    public function store(Request $request){

        
        $comunidades = Comunidades::all();
        $municipios = Municipios::where('id', $comunidades->mucipios_id)->first()->toArray();

        $comunidades->municipios_id = $municipios->id;

        return view('comunidades.cadastrar',['comunidades' => $comunidades]);

    }


    public function show($id){
        $comunidades = Comunidades::all();
        $municipios = Municipios::where('id', $comunidades->mucipios_id)->first()->toArray();

        $comunidades->municipios_id = $municipios->id;

        return view('comunidades.cadastrar',['comunidades' => $comunidades, 'municipios' => $municipios]);
    }

}
