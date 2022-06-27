<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Executores;

class ExecutorController extends Controller
{
    public function dashboard(){


        $admin = auth()->user()->admin;
        $cadastrador = auth()->user()->cadastrador;
        if($admin == 1 || $cadastrador == 1 ){


        $executadores = Executores::all();
        
        $search = request('search');

        if($search):

            $executadores = Executores::where([
                ['nome_executor','like',"%".($search)."%"]
            ])->get();

            endif;


        return view('executadores.dashboard',['executadores' => $executadores]);
        }else{
            $this->authorize('adminlverro');
        }
    }


    public function create(){
        $admin = auth()->user()->admin;
        $cadastrador = auth()->user()->cadastrador;
        if($admin == 1 || $cadastrador == 1 ){
        
        return view('executadores.cadastrar');
        }else{
            $this->authorize('adminlverro');
        }
    }


    public function store(Request $request){

        $admin = auth()->user()->admin;
        $cadastrador = auth()->user()->cadastrador;
        if($admin == 1 || $cadastrador == 1 ){

        $executadores = new Executores;

        $executadores->nome_executor = $request->nome_executor;


        $executadores->save();


        return redirect('/executadores/dashboard')->with('msg','Executador criado com sucesso!');

        }else{
            $this->authorize('adminlverro');
        }
    }


    public function edit($id){

        $admin = auth()->user()->admin;
        $cadastrador = auth()->user()->cadastrador;
        if($admin == 1 || $cadastrador == 1 ){
        $executadores = Executores::findOrFail($id);

        return view('executadores.edit',['executadores' => $executadores]);
        }else{
            $this->authorize('adminlverro');
        }
    }

    

    public function update(Request $request){
        
        $admin = auth()->user()->admin;
        $cadastrador = auth()->user()->cadastrador;
        if($admin == 1 || $cadastrador == 1 ){


        Executores::findOrFail($request->id)->update($request->all());


        return redirect('/executadores/dashboard')->with('msg','Executador editado com sucesso!');

        }else{
            $this->authorize('adminlverro');
        }
    }

    public function destroy($id){
        $admin = auth()->user()->admin;
        if($admin == 1){
        Executores::findOrFail($id)->delete();


        return redirect('/executadores/dashboard')->with('msg','Executador deletado com sucesso!');
        }else{
            $this->authorize('adminlverro');
        }


    }

}
