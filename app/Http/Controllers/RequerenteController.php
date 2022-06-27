<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Requerente;

class RequerenteController extends Controller
{
    public function dashboard(){


        $admin = auth()->user()->admin;
        $cadastrador = auth()->user()->cadastrador;
       


        if($admin == 1 || $cadastrador == 1 ){
        

        $search = request('search');

        if($search):

            $requerente = Requerente::where([
                ['cpf','like',"%".($search)."%"]
            ])->get();

            else:
                $requerente = Requerente::all();

            endif;


        



        return view('requerentes.dashboard',['requerente' => $requerente]);
    }else{
        $this->authorize('adminlvErro');
    }
    }

    public function create(){
        
        $admin = auth()->user()->admin;
        $cadastrador = auth()->user()->cadastrador;
    


        if($admin == 1 || $cadastrador == 1  ){
        return view('requerentes.cadastrar');
        }else{
            $this->authorize('adminlvErro');
        }
    }


    public function store(Request $request){



        $admin = auth()->user()->admin;
        $cadastrador = auth()->user()->cadastrador;
    


        if($admin == 1 || $cadastrador == 1 ){


        $requerentes = new Requerente;

       
        $requerentes->cpf = $request->cpf;
        $requerentes->pessoa = $request->pessoa;
        $requerentes->nome = $request->nome;
        $requerentes->sexo = $request->sexo;
        $requerentes->profissional = $request->profissao;
        $requerentes->estado = $request->estado;
        $requerentes->data_nascimento = $request->data_nascimento;
        $requerentes->nacionalidade = $request->nacionalidade;
        $requerentes->rg = $request->rg;
        $requerentes->estado_civil = $request->estado_civil;
        $requerentes->telefone = $request->telefone;
        $requerentes->email = $request->email;
        $requerentes->endereco = $request->endereco;
        $requerentes->nome_pai = $request->nome_pai;
        $requerentes->nome_mae = $request->nome_mae;
        $requerentes->nome_conjugue = $request->nome_conjugue;
        $requerentes->cpf_conjugue = $request->cpf_conjugue;
        $requerentes->rg_conjugue = $request->rg_conjugue;
        $requerentes->estado_conjugue = $request->estado_conjugue;
        

        $requerentes->save();

        return redirect('/requerentes/dashboard')->with('msg', 'Requerente criado com sucesso!');
        }else{
            $this->authorize('adminlvErro');
        }
    }


    public function show($id){

        $requerentes = Requerente::findOrFail($id);

        return view('requerentes.show',['requerentes' => $requerentes]);


    }


    public function edit($id){
        $admin = auth()->user()->admin;
        $cadastrador = auth()->user()->cadastrador;
 


        if($admin == 1 || $cadastrador == 1  ){

        $requerentes = Requerente::findOrFail($id);

        return view('requerentes.edit',['requerentes' => $requerentes]);
        }else{
            $this->authorize('adminlvErro');
        }


    }


    public function update(Request $request){
        $admin = auth()->user()->admin;
        $cadastrador = auth()->user()->cadastrador;



        if($admin == 1 || $cadastrador == 1 ){

        Requerente::findOrFail($request->id)->update($request->all());




        return redirect('/requerentes/dashboard')->with('msg', 'Requerente editado com sucesso!');
        }else{
            $this->authorize('adminlvErro');
        }
    }



    public function destroy($id){
        $admin = auth()->user()->admin;



        if($admin == 1 ){
        Requerente::findOrFail($id)->delete();

        return redirect('/requerentes/dashboard')->with('msg', 'Requerente excluido com sucesso!');
        }else{
            $this->authorize('adminlvErro');
        }
    }

}
