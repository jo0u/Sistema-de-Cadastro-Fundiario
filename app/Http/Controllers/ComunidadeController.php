<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comunidades;
use App\Models\Municipios;
class ComunidadeController extends Controller
{
    public function dashboard(){

        $search = request('search');
        
        if($search):
            $comunidades = Comunidades::where([
                ['nome_comunidade', 'like',"%".($search)."%"]
            ])->get();
            else:
                $comunidades = Comunidades::all();
            endif;
                   
                    $comunidades = Comunidades::paginate(100);
        return view('/comunidades/dashboard',['comunidades' => $comunidades]);
    }


    public function show(){
        $search = request('search');
        
        if($search):
            $comunidades = Comunidades::where([
                ['nome_comunidade', 'like',"%".($search)."%"]
            ])->get();
            else:
                $comunidades = Comunidades::all();
            endif;
        return view('comunidades.show',['comunidades' => $comunidades]);
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

    public function edit($id){
        $comunidades = Comunidades::findOrFail($id);

        $municipios = Municipios::all();

        return view('comunidades.edit',['comunidades' => $comunidades , 'municipios' => $municipios]);
    }

}
