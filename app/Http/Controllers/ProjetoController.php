<?php

namespace App\Http\Controllers;

use App\Models\Projetos;
use Illuminate\Http\Request;

class ProjetoController extends Controller
{
    public function dashboard(){




        $search = request('search');

        if($search):
            $projetos = Projetos::where([
                ['codigo', 'like',"%".($search)."%"]
            ])->get();
            
            else:
                $projetos = Projetos::all();
            endif;


        

        return view('/projetos/dashboard',['projetos' => $projetos]);
    }

    public function create(){

        return view('projetos.cadastrar');
    }


    public function store(Request $request){
        $projetos = new Projetos;

        $projetos->codigo = $request->codigo;
        $projetos->descricao = $request->descricao;

        $projetos->save();

        return redirect('/projetos/dashboard')->with('msg', 'Projeto criado com sucesso!');
    }


    public function show($id){
        $projetos = Projetos::findOrFail($id);



        return view('projetos.show',['projetos'=> $projetos]);
    }

    public function edit($id){
        $projetos = Projetos::findOrFail($id);


        return view('projetos.edit',['projetos' => $projetos]);
    }

    public function update(Request $request){
        Projetos::findOrFail($request->id)->update($request->all());


        return redirect('/projetos/dashboard')->with('msg','Projeto alterado com sucesso!');


    }

    public function destroy($id){
        Projetos::findOrFail($id)->delete();

        return redirect('/projetos/dashboard')->with('msg','Projeto deletado com sucesso!');
    }
}
