<?php

namespace App\Http\Controllers;

use App\Models\Projetos;
use Illuminate\Http\Request;

class ProjetoController extends Controller
{
    public function dashboard(){


        $admin = auth()->user()->admin;
        $cadastrador = auth()->user()->cadastrador;

        if($admin ==1 || $cadastrador == 1  ){

        $search = request('search');

        if($search):
            $projetos = Projetos::where([
                ['codigo', 'like',"%".($search)."%"]
            ])->get();
            
            else:
                $projetos = Projetos::all();
            endif;

            

        

        return view('/projetos/dashboard',['projetos' => $projetos]);
        }else{
            $this->authorize('adminlvErro');
        }
    }

    public function create(){
        $admin = auth()->user()->admin;
        $cadastrador = auth()->user()->cadastrador;

        if($admin ==1 || $cadastrador == 1  ){

        return view('projetos.cadastrar');
    }
}


    public function store(Request $request){


        $admin = auth()->user()->admin;
        $cadastrador = auth()->user()->cadastrador;

        if($admin ==1 || $cadastrador == 1  ){
        
        $projetos = new Projetos;

        $projetos->codigo = $request->codigo;
        $projetos->descricao = $request->descricao;

        $projetos->save();

        return redirect('/projetos/dashboard')->with('msg', 'Projeto criado com sucesso!');
        }
    }


    public function show($id){

        $admin = auth()->user()->admin;
        $cadastrador = auth()->user()->cadastrador;

        if($admin ==1 || $cadastrador == 1  ){
        $projetos = Projetos::findOrFail($id);



        return view('projetos.show',['projetos'=> $projetos]);
    }else{
        $this->authorize('adminlvErro');
    }
    }
    public function edit($id){
        $admin = auth()->user()->admin;
        $cadastrador = auth()->user()->cadastrador;

        if($admin ==1 || $cadastrador == 1  ){
        $projetos = Projetos::findOrFail($id);


        return view('projetos.edit',['projetos' => $projetos]);
        }else{
            $this->authorize('adminlvErro');
        }
    }

    public function update(Request $request){
        $admin = auth()->user()->admin;
        $cadastrador = auth()->user()->cadastrador;

        if($admin ==1 || $cadastrador == 1  ){
        Projetos::findOrFail($request->id)->update($request->all());


        return redirect('/projetos/dashboard')->with('msg','Projeto alterado com sucesso!');

        }else{
            $this->authorize('adminlvErro');
        }

    }

    public function destroy($id){
        $admin = auth()->user()->admin;
        

        if($admin == 1 ){
        Projetos::findOrFail($id)->delete();

        return redirect('/projetos/dashboard')->with('msg','Projeto deletado com sucesso!');
        }else{
            $this->authorize('adminlvErro');
        }
    }
}
