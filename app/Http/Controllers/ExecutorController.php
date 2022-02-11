<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Executores;

class ExecutorController extends Controller
{
    public function dashboard(){

        $executadores = Executores::all();
           




        return view('executadores.dashboard',['executadores' => $executadores]);
    }


    public function create(){



        return view('executadores.cadastrar');
    }


    public function store(Request $request){

        $executadores = new Executores;

        $executadores->nome_executor = $request->nome_executor;


        $executadores->save();


        return redirect('/executadores/dashboard')->with('msg','Executador criado com sucesso!');


    }


    public function edit($id){
        $executadores = Executores::findOrFail($id);

        return view('executadores.edit',['executadores' => $executadores]);
        
    }

    

    public function update(Request $request){
        
        Executores::findOrFail($request->id)->update($request->all());


        return redirect('/executadores/dashboard')->with('msg','Executador editado com sucesso!');
    }

    public function destroy($id){
        Executores::findOrFail($id)->delete();


        return redirect('/executadores/dashboard')->with('msg','Executador deletado com sucesso!');


    }

}
